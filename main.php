<?php

require_once __DIR__ . '/src/php/Helper.php';
require_once __DIR__ . '/src/php/Config.php';
require_once __DIR__ . '/src/php/Obfuscator.php';

use CodeCryptor\Helper\EncryptionHelper;
use CodeCryptor\Config\Config;
use CodeCryptor\PHP\Obfuscator;

try {
    $inputFile = __DIR__ . '/examples/php/input.php';
    $outputFile = __DIR__ . '/examples/php/output.php';

    $obfuscator = new Obfuscator($inputFile, $outputFile);

    $obfuscator->obfuscate();

    echo "File obfuscated successfully! Output file: {$outputFile}\n";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}