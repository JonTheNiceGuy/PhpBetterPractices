<?php

class Config_03
{
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
}