<?php

require __DIR__.'/../vendor/autoload.php';
use Output\PhpMailerEmailOutput as PhpMailerEmailOutput;

class EmailOutputTest extends PHPUnit_Framework_TestCase
{

    public function testEmailOutput()
    {
        $emailOutput = new PhpMailerEmailOutput();
        $this->assertEquals(1,1);
    }
}
