# CodeCryptor - PHP and Python Code Obfuscator

CodeCryptor is a tool that helps in protecting your source code by obfuscating it. This tool encodes and encrypts PHP and Python files to make reverse engineering and code inspection more difficult.

## Features
- File obfuscation with encryption and compression for both PHP and Python.
- Secure obfuscation with base64 and AES encryption.
- Configurable compression levels for obfuscated files.
- Supports both PHP and Python versions of the tool.

## Installation

### PHP Version
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

### Python Version
1. Clone the repository:
   ```bash
   git clone https://github.com/alireza-tahriri-masule/code-cryptor.git
   ```

2. Install dependencies (if any):
   ```bash
   pip install -r requirements.txt
   ```

3. The obfuscator is ready to use. You can start obfuscating your Python files by running the following command:
   ```bash
   python index.py
   ```

## Usage

### Obfuscating a PHP file:
To obfuscate a PHP file, modify the `index.php` file to specify your input and output file paths. Then, run the script to generate the obfuscated output.

```php
$inputFile = __DIR__ . '/examples/PHP/input.php'; // File to obfuscate
$outputFile = __DIR__ . '/examples/PHP/output.php'; // Output file for obfuscated code
```

### Obfuscating a Python file:
To obfuscate a Python file, modify the `index.py` file to specify your input and output file paths. Then, run the script to generate the obfuscated output.

```python
input_file = 'examples/Python/input.py'  # File to obfuscate
output_file = 'examples/Python/output.py'  # Output file for obfuscated code
```

### Example Input & Output:
- **Input file (PHP)**: `examples/PHP/input.php`
- **Output file (PHP)**: `examples/PHP/output.php`
- **Input file (Python)**: `examples/Python/input.py`
- **Output file (Python)**: `examples/Python/output.py`

After running the script, the output file will contain the obfuscated code in the specified language.

## New Features in Both PHP and Python Versions
- **Updated default print output**: The default output for the `print` statement in both PHP and Python versions has been changed to `"Hello World!"` for consistency across both implementations.
  - PHP: `echo "Hello World!";`
  - Python: `print("Hello World!")`

## Configuration
You can configure the obfuscation process by modifying the `Config.php` file (for PHP) or `config.py` file (for Python). These files allow you to set the default encryption key, compression level, and other settings.

## License
This project is licensed under the MIT License.
```

### Changes:
1. **Project Title**: Updated the title to "PHP and Python Code Obfuscator" to reflect the inclusion of both versions.
2. **New Features**: Added information about the new features, including the support for both PHP and Python.
3. **Installation and Usage**: Detailed the installation and usage instructions for both PHP and Python versions.
4. **Default `print` Output**: Added information about the change to the default `print` statement in both PHP and Python to `"Hello World!"`.

This updated `README.md` now includes details for both the PHP and Python versions of the project.