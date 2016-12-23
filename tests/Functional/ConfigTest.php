<?php

namespace Tests\Functional;
use Proto;

class ConfigTest extends BaseTestCase
{
 
    /**
    * Test That We Can Autoload Stuff From Bin
    */
    public function testbinAutoloaderWorks()
    {
        $test = Proto\ProtoConfig::test();
        $this->assertTrue($test);
    }

}