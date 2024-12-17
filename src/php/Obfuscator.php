<?php

namespace CodeCryptor\PHP;

use CodeCryptor\Helper\EncryptionHelper;
use CodeCryptor\Config\Config;

class Obfuscator
{
    private $inputPath;
    private $outputPath;
    private $compressionLevel;
    private $secretKey;

    public function __construct($inputPath, $outputPath, $compressionLevel = null, $secretKey = null)
    {
        $this->inputPath = $inputPath;
        $this->outputPath = $outputPath;
        $this->compressionLevel = $compressionLevel ?? Config::getDefaultCompressionLevel();
        $this->secretKey = hash('sha256', $secretKey ?? Config::getDefaultSecretKey());
        $this->validateInputFile();
    }

    private function validateInputFile()
    {
        if (!file_exists($this->inputPath)) {
            throw new \Exception("Input file not found: {$this->inputPath}");
        }
    }

    public function obfuscate()
    {
        $originalCode = php_strip_whitespace($this->inputPath);
        $compressedCode = gzcompress("{$originalCode}", $this->compressionLevel);

        $encryptedCode = EncryptionHelper::encryptData($compressedCode, $this->secretKey);
        $dataWithSignature = $encryptedCode . '::' . hash('sha256', $encryptedCode);

        $output = $this->generateObfuscatedOutput($dataWithSignature);

        file_put_contents($this->outputPath, $output);
        echo "Obfuscation completed successfully.\n";
    }

    private function generateObfuscatedOutput($dataWithSignature)
    {
        $randomVar1 = $this->randomString();
        $randomVar2 = $this->randomString();
        $randomFunc1 = $this->randomString();
        $randomFunc2 = $this->randomString();
        $base64Data = base64_encode($dataWithSignature);

        return "<?php function {$randomFunc1}(\$x){return base64_decode(\$x);} function {$randomFunc2}(\$data,\$key){\$iv=substr(sha1(\$key),0,16);return openssl_decrypt(\$data,'AES-256-CBC',\$key,0,\$iv);} \${$randomVar1}=\"{$base64Data}\"; \${$randomVar2}={$randomFunc1}(\${$randomVar1}); list(\$a,\$b)=explode('::',\${$randomVar2}); if(\$b!==hash('sha256',\$a)){die('Signature error');} \$decrypted=gzuncompress({$randomFunc2}(\$a,'{$this->secretKey}')); eval('?>'.\$decrypted); ?>";
    }

    private function randomString($length = 8)
    {
        return substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, $length);
    }
}
