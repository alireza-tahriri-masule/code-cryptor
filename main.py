from src.python.obfuscator import Obfuscator

def main():
    try:
        input_file = './examples/python/input.py'  # مسیر فایل ورودی
        output_file = './examples/python/output.py'  # مسیر فایل خروجی
        secret_key = 'my_secret_key'  # کلید رمزگذاری

        # ایجاد نمونه از Obfuscator
        obfuscator = Obfuscator(input_path=input_file, output_path=output_file, secret_key=secret_key)
        obfuscator.obfuscate()

    except Exception as e:
        print(f"Error: {e}")

if __name__ == '__main__':
    main()
