class Config:
    @staticmethod
    def get_default_compression_level() -> int:
        """
        Return the default compression level.
        """
        return 1

    @staticmethod
    def get_default_secret_key() -> str:
        """
        Return the default secret key.
        """
        return "default_secret_key"
