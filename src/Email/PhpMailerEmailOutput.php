<?php

namespace Output;

class PhpMailerEmailOutput extends EmailOutput implements IOutput, IEmail , \SPLObserver
{

    public function output( \stdClass $output )
    {
        $settings      = \Calculator\DI\CalculatorProvider::config();

        if( !empty( $settings ) )
        {
            $this->emailer->addAddress($settings['email']['application']['EmailTo']);
            $this->emailer->setFrom($settings['email']['application']['EmailFrom']);
            $this->emailer->Subject = $settings['email']['application']['EmailSubject'];
            $this->emailer->Body = $settings['email']['application']['EmailBody'];
        }
        else
        {
            $this->emailer->addAddress($output->address);
            $this->emailer->setFrom($output->from);
            $this->emailer->Subject = $output->subject;;
            $this->emailer->Body = $output->body;
        }

        echo " \n here the emailer would email "  . $this->emailer->Body . " value from src/config/application.ini \n";
    }
}
