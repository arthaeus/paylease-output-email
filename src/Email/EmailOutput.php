<?php

namespace Output;

abstract class EmailOutput implements IOutput, IEmail, \SPLObserver
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

    /**
     * implement this function based on the emailer library that you are using
     */
    abstract public function output( \stdClass $output );


}
