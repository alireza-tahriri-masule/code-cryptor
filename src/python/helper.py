import zlib
import base64
from cryptography.hazmat.primitives.ciphers import Cipher, algorithms, modes
from cryptography.hazmat.backends import default_backend
import hashlib

class EncryptionHelper:
    @staticmethod
    def encrypt_data(data: str, key: str) -> str:
        iv = hashlib.sha256(key.encode('utf-8')).digest()[:16]
        cipher = Cipher(algorithms.AES(hashlib.sha256(key.encode('utf-8')).digest()), modes.CBC(iv), backend=default_backend())
        encryptor = cipher.encryptor()
        padded_data = data + (16 - len(data) % 16) * chr(16 - len(data) % 16)
        encrypted = encryptor.update(padded_data.encode('utf-8')) + encryptor.finalize()
        return base64.b64encode(encrypted).decode('utf-8')

    @staticmethod
    def decrypt_data(data: str, key: str) -> str:
        iv = hashlib.sha256(key.encode('utf-8')).digest()[:16]
        cipher = Cipher(algorithms.AES(hashlib.sha256(key.encode('utf-8')).digest()), modes.CBC(iv), backend=default_backend())
        decryptor = cipher.decryptor()
        encrypted_data = base64.b64decode(data)
        decrypted = decryptor.update(encrypted_data) + decryptor.finalize()
        padding_length = decrypted[-1]
        return decrypted[:-padding_length].decode('utf-8')
