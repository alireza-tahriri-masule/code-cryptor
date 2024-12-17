import zlib
import os

class Obfuscator:
    def __init__(self, input_path: str, output_path: str, compression_level: int = 9, secret_key: str = None):
        self.input_path = input_path
        self.output_path = output_path
        self.compression_level = compression_level
        self.secret_key = secret_key 
        self.validate_input_file()

    def validate_input_file(self):
        if not os.path.exists(self.input_path):
            raise Exception(f"Input file not found: {self.input_path}")

    def obfuscate(self):
        with open(self.input_path, 'r', encoding='utf-8') as file:
            original_code = file.read()

        # فشرده‌سازی داده‌ها
        compressed_code = zlib.compress(original_code.encode('utf-8'), self.compression_level)

        # تبدیل داده‌های فشرده شده به هگزادسیمال
        compressed_code_hex = compressed_code.hex()

        # نوشتن داده‌ها به output.py
        with open(self.output_path, 'w', encoding='utf-8') as file:
            file.write("import zlib\n")
            file.write(f"compressed_code = \"{compressed_code_hex}\"\n")
            file.write('exec(zlib.decompress(bytes.fromhex(compressed_code)).decode("utf-8"))')

        print(f"Obfuscation completed successfully.\nFile saved to {self.output_path}")