<?php

namespace CodeCryptor\Config;

class Config
{
    private static $defaultOutputPath = __DIR__ . '/../../examples/php/';

    public static function getOutputPath()
    {
        return self::$defaultOutputPath;
    }

    public static function getDefaultCompressionLevel()
    {
        return 1; 
    }

    public static function getDefaultSecretKey()
    {
        return 'default_key';
    }
}