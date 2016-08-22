<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// mcrypt is deprecated: https://wiki.php.net/rfc/mcrypt-viking-funeral
// MCRYPT_RIJNDAEL_256

$text = 'This is a "SUPER SECRET" string with £$%^&* characters';
$key  = substr(bin2hex(md5(rand(0,999999))), 0, 32);
$iv   = substr(bin2hex(md5(rand(0,999999))), 0, 32);
$cipher = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $key, $text, MCRYPT_MODE_OFB, $iv));
$back   = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, base64_decode($cipher), MCRYPT_MODE_OFB, $iv);

echo "\nText: \n$text\n";
echo "\nEncrypted using mcrypt_encrypt():\n$cipher\n";
echo "\nDecrypted using mcrypt_decrypt():\n$back\n";

echo "\n----------------------------------------------------\n";
echo "\nSame thing using OpenSSL:\n";

$cipher = base64_encode(openssl_encrypt($text, 'aes-256-ctr', $key, 0, substr($iv, 0, 16)));
$back   = openssl_decrypt(base64_decode($cipher), 'aes-256-ctr', $key, 0, substr($iv, 0, 16));
echo "\nText: \n$text\n";
echo "\nEncrypted using openssl_encrypt():\n$cipher\n";
echo "\nDecrypted using openssl_decrypt():\n$back\n";

echo "\n----------------------------------------------------\n";
echo implode(' ', openssl_get_cipher_methods());
