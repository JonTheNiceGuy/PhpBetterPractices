<?php

include dirname(__FILE__) . '/../Classes/01_Config.php';

class ConfigTest_01 extends PHPUnit_Framework_TestCase
{
    public function testLoadConfig()
    {
        $config = new Config_01();
        $this->assertTrue(is_object($config));
    }
}