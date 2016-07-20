<?php

namespace Output;

class EmailOutput implements IOutput, \SPLObserver
{

    public function update( \SPLSubject $subject )
    {
        $message = $subject->getMessage();
        $messageObj = new \stdClass();
        $messageObj->message = $message;
        $this->output( $messageObj );
    }

    public function output( \stdClass $output )
    {
        echo $output->message;
    }
}
