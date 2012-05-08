<?php

include dirname(__FILE__) . '/../Classes/04_Config.php';

class ConfigTest_04 extends PHPUnit_Framework_TestCase
{
    public function testLoadConfig()
    {
        $config = new Config_04();
        $this->assertTrue(is_object($config));
        $config->load('04_default.config.php');
        $this->assertTrue($config->get('demo'));
    }
    
    /**
     * @expectedException InvalidArgumentException
     */
    public function testFailLoadingConfig()
    {
        $config = new Config_04();
        @$config->load('A file which does not exist');
    }
    
    /**
     * @expectedException BadFunctionCallException
     */
    public function testFailSettingValue()
    {
        $config = new Config_04();
        @$config->set();
    }

    /**
     * @expectedException BadFunctionCallException
     */
    public function testFailGettingValue()
    {
        $config = new Config_04();
        @$config->get();
    }
}