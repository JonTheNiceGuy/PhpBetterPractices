<?php

include dirname(__FILE__) . '/../Classes/02_Config.php';

class ConfigTest_02 extends PHPUnit_Framework_TestCase
{
    public function testCreateObject()
    {
        $config = new Config_02();
        $this->assertTrue(is_object($config));
    }
    
    public function testLoadConfig()
    {
        $config = new Config_02();
        $config->load();
    }
}