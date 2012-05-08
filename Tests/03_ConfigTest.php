<?php

include dirname(__FILE__) . '/../Classes/03_Config.php';

class ConfigTest_03 extends PHPUnit_Framework_TestCase
{
    public function testCreateObject()
    {
        $config = new Config_03();
        $this->assertTrue(is_object($config));
    }
    
    public function testLoadConfig()
    {
        $config = new Config_03();
        $config->load('03_default.config.php');
    }
    
    /**
     * @expectedException InvalidArgumentException
     */
    public function testFailLoadingConfig()
    {
        $config = new Config_03();
        @$config->load('A file which does not exist');
    }
}