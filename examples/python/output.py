import zlib
compressed_code = "78da535608cecc2dc8495508a82cc9c8cf5348ce4f495548cb2f52c84f4a2b2d4e4e2cc9040aa6562482d470151465e695682879a4e6e4e42b84e717e5a4282a989a286902005d7517cd"
exec(zlib.decompress(bytes.fromhex(compressed_code)).decode("utf-8"))