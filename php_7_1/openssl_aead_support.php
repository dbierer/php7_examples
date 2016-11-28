<?php
// see: https://wiki.php.net/rfc/openssl_aead
// see: https://bugs.php.net/bug.php?id=67304
// The code below *should*, as last line, print 'recovered: Hello World', however decryption with gcm always fails.
// Adding a 6th param $tag, passed by reference, allows successful recovery in PHP 7.1

echo '<pre>' . PHP_EOL;
echo "\n--------------------------------------------\n";
echo PHP_VERSION . PHP_EOL;
echo print_r(openssl_get_cipher_methods(), true);

$cipher = 'aes-256-gcm';

$ivlen = openssl_cipher_iv_length($cipher);

echo "iv len: " . $ivlen . "\n";

$iv = openssl_random_pseudo_bytes($ivlen);
$hexiv = bin2hex($iv);

echo "iv: " . $hexiv . "\n";

$plaintext = "Hello World";

echo "plaintext: " . $plaintext . "\n";

$clearpass = 'passphrase';
$pbkdfsalt = openssl_random_pseudo_bytes(16);
$password = hash_pbkdf2('sha256', $clearpass, $pbkdfsalt, 1001, 32, true);

echo "clearpass: " . $clearpass . "\n";
echo "pbkdfsalt: " . bin2hex($pbkdfsalt) . "\n";
echo "password: " . bin2hex($password) . "\n";

// This is the important part: (fails in PHP 5 and PHP 7.0)
try {

    echo "\n--------------------------------------------\n";
    echo 'This does not work in PHP 5.x or 7.0';
    echo "\n--------------------------------------------\n";
    $ciphertext = openssl_encrypt($plaintext, $cipher, $password, 0, $iv);
    echo "ciphertext: " . print_r($ciphertext, true) . "\n";
    $recovered = openssl_decrypt($ciphertext, $cipher, $password, 0, $iv);
    echo "recovered: " . $recovered . "\n";

} catch (Error $e) {

    echo $e->getMessage() . PHP_EOL;

}

try {

    echo "\n--------------------------------------------\n";
    echo 'Adding $tag makes this work in PHP 7.1';
    echo "\n--------------------------------------------\n";
    $tag = '';
    $ciphertext = openssl_encrypt($plaintext, $cipher, $password, 0, $iv, $tag);
    echo "ciphertext: " . print_r($ciphertext, true) . "\n";
    $recovered = openssl_decrypt($ciphertext, $cipher, $password, 0, $iv, $tag);
    echo "recovered: " . $recovered . "\n";

} catch (Error $e) {

    echo $e->getMessage() . PHP_EOL;

}

echo '</pre>' . PHP_EOL;
