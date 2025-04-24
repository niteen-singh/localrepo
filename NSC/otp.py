import os

def generate_key(length: int) -> bytes:
    """Generate a random key of the given length."""
    return os.urandom(length)

def otp_encrypt(plaintext: str, key: bytes) -> bytes:
    """Encrypt the plaintext with the given key using XOR."""
    plaintext_bytes = plaintext.encode('utf-8')
    return bytes([p ^ k for p, k in zip(plaintext_bytes, key)])

def otp_decrypt(ciphertext: bytes, key: bytes) -> str:
    """Decrypt the ciphertext with the given key using XOR."""
    decrypted_bytes = bytes([c ^ k for c, k in zip(ciphertext, key)])
    return decrypted_bytes.decode('utf-8')

# Example usage
message = "Hello, One-Time Pad!"
key = generate_key(len(message))
ciphertext = otp_encrypt(message, key)
decrypted_message = otp_decrypt(ciphertext, key)

print("Original message:", message)
print("Encrypted (ciphertext):", ciphertext)
print("Decrypted message:", decrypted_message)
