<?php

namespace Output;

class PhpMailerEmailOutput extends EmailOutput implements IOutput, IEmail , \SPLObserver
{

    protected $emailer = null;

    public function getEmailer()
    {
        return $this->emailer;
    }

    public function setEmailer( $emailer )
    {
        $this->emailer = $emailer;
    }

    public function update( \SPLSubject $subject )
    {
        $message = $subject->getMessage();
        $messageObj = new \stdClass();
        $messageObj->message = $message;
        $this->output( $messageObj );
    }

    public function output( \stdClass $output )
    {
        $settings      = \Calculator\DI\CalculatorProvider::config();
        $this->emailer->addAddress($settings['email']['application']['EmailTo']);
        $this->emailer->setFrom($settings['email']['application']['EmailFrom']);
        $this->emailer->Subject = $settings['email']['application']['EmailSubject'];
        $this->emailer->Body = $settings['email']['application']['EmailBody'];
        echo " \n here the emailer would email "  . $this->emailer->Body . " value from src/config/application.ini \n";
    }
}
