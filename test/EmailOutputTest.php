<?php

require __DIR__.'/../vendor/autoload.php';
use Output\EmailOutput as EmailOutput;

class EmailOutputTest extends PHPUnit_Framework_TestCase
{

    public function testEmailOutput()
    {
        $screenOutput = new EmailOutput();
        $this->assertEquals(1,1);
    }
}
