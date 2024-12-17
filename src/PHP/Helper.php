<?php

namespace CodeCryptor\Helper;

class EncryptionHelper
{
    public static function encryptData($data, $key)
    {
        $iv = substr(sha1($key), 0, 16);
        return openssl_encrypt($data, 'AES-256-CBC', $key, 0, $iv);
    }

    public static function decryptData($encryptedData, $key)
    {
        $iv = substr(sha1($key), 0, 16);
        return openssl_decrypt($encryptedData, 'AES-256-CBC', $key, 0, $iv);
    }
}