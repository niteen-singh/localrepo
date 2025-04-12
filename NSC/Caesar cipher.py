def encrypt(text, shift):
    result = ""

    for char in text:
        if char.isalpha():
            shift_base = ord('A') if char.isupper() else ord('a')
            result += chr((ord(char) - shift_base + shift) % 26 + shift_base)
        else:
            result += char  # Leave non-alphabet characters unchanged

    return result


def decrypt(text, shift):
    return encrypt(text, -shift)


# Driver code
if __name__ == "__main__":
    message = input("Enter the message: ")
    shift = int(input("Enter the shift key (integer): "))

    encrypted = encrypt(message, shift)
    print("\nEncrypted Message:", encrypted)

    decrypted = decrypt(encrypted, shift)
    print("Decrypted Message:", decrypted)
