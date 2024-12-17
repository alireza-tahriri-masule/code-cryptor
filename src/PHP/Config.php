<?php

namespace CodeCryptor\Config;

class Config
{
    private static $defaultOutputPath = __DIR__ . '/../../examples/PHP/';

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
