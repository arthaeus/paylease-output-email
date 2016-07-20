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
    }
}
