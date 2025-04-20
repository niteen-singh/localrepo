from Crypto.PublicKey import RSA
from Crypto.Cipher import PKCS1_OAEP


key = RSA.genereate(2048)
public_key = key.publicKey()
encryptor = PKCS1_OAEP.new(public_key)
decryptor = PKCS1_OAEP.new(key)

mess = "hello"

enc = encryptor.encrypt(mess.encode())
dec = decryptor.decrypt(enc).decode()

print("encrypted: ",enc)
print("decrypted: ",dec)