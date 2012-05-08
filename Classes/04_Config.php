<?php

class Config_04
{
    protected $arrValues = array();
    
    public function load($file = null)
    {
        if ($file == null) {
            $file = 'default.config.php';
        }
        
        $filename = dirname(__FILE__) . '/../Config/' . $file;
        
        if (file_exists($filename)) {
            include $filename;
        } else {
            throw new InvalidArgumentException("File not found");
        }
    }
    
    public function set($key = null, $value = null)
    {
        if ($key == null) {
            throw new BadFunctionCallException("Key not set");
        }
        if ($value == null) {
            unset ($this->arrValues[$key]);
            return true;
        } else {
            $this->arrValues[$key] = $value;
            return true;
        }
    }
    
    public function get($key = null)
    {
        if ($key == null) {
            throw new BadFunctionCallException("Key not set");
        }
        if (isset($this->arrValues[$key])) {
            return $this->arrValues[$key];
        } else {
            return null;
        }
    }
}