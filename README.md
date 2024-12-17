# CodeCryptor - PHP Code Obfuscator

CodeCryptor is a PHP obfuscator tool that helps in protecting your PHP source code by obfuscating it. This tool encodes and encrypts PHP files to make reverse engineering and code inspection more difficult.

## Features
- File obfuscation with encryption and compression.
- Secure obfuscation with base64 and AES encryption.
- Configurable compression levels for obfuscated files.

## Installation
1. Clone the repository:
   ```bash
   git clone https://github.com/alireza-tahriri-masule/code-cryptor.git
   ```

2. Install dependencies (if any):
   ```bash
   composer install
   ```

3. The obfuscator is ready to use. You can start obfuscating your PHP files by running the following command:
   ```bash
   php index.php
   ```

## Usage

### Obfuscating a PHP file:
To obfuscate a PHP file, modify the `index.php` file to specify your input and output file paths. Then, run the script to generate the obfuscated output.

```php
$inputFile = __DIR__ . '/examples/PHP/input.php'; // File to obfuscate
$outputFile = __DIR__ . '/examples/PHP/output.php'; // Output file for obfuscated code
```

### Example Input & Output:
- **Input file**: `examples/PHP/input.php`
- **Output file**: `examples/PHP/output.php`

After running the script, the `output.php` file will contain the obfuscated PHP code.

## Configuration
You can configure the obfuscation process by modifying the `Config.php` file. It allows you to set the default encryption key, compression level, and other settings.

## License
This project is licensed under the MIT License.