<?php
class EncryptionHelper
{
    private const KEY_LENGTH = 256; // 256 bits
    private const ITERATION_COUNT = 65536;

    public static function encrypt($strToEncrypt, $secret, $salt)
    {
        try {
            $iv = random_bytes(16);
            $key = hash_pbkdf2("sha256", $secret, $salt, self::ITERATION_COUNT, self::KEY_LENGTH, true);
            $cipherText = openssl_encrypt($strToEncrypt, 'aes-256-cbc', $key, 0, $iv);
            $encryptedData = $iv . $cipherText;

            return base64_encode($encryptedData);
        } catch (Exception $e) {
            // Handle the exception properly
            error_log("Encryption failed: " . $e->getMessage());
            return null;
        }
    }
    public static function decrypt($strToDecrypt, $secret, $salt)
    {
        try {
            $encryptedData = base64_decode($strToDecrypt);
            $iv = substr($encryptedData, 0, 16);
            $cipherText = substr($encryptedData, 16);
            $key = hash_pbkdf2("sha256", $secret, $salt, self::ITERATION_COUNT, self::KEY_LENGTH, true);
            $decryptedText = openssl_decrypt($cipherText, 'aes-256-cbc', $key, 0, $iv);

            return $decryptedText;
        } catch (Exception $e) {
            // Handle the exception properly
            error_log("Decryption failed: " . $e->getMessage());
            return null;
        }
    }
}
$secretKey = "hathwaycustKey";
$originalString = "1292634163"; // Account No
$salt = "pdfecafsalt";
//Encrypt the string
$encryptedString = EncryptionHelper::encrypt($originalString, $secretKey, $salt);
if ($encryptedString !== null) {
    echo "Encrypted: " . $encryptedString . "\n";
} else {
    echo "Encryption failed.\n";
}
//$data = "I2VIpg9zxKvhHE49L+7GZ4fgFV6iqb1MLVE2DuzUWsg=";
$decryptedString = EncryptionHelper::decrypt($encryptedString, $secretKey, $salt);
if ($decryptedString !== null) {
    echo "Decrypted: " . $decryptedString . "\n";
} else {
    echo "Decryption failed.\n";
}




function getEncrypt($strToEncrypt, $secret, $salt)
    {
        try {
            $iv = random_bytes(16);
            $key = hash_pbkdf2("sha256", $secret, $salt, 65536, 256, true);
            $cipherText = openssl_encrypt($strToEncrypt, 'aes-256-cbc', $key, 0, $iv);
            $encryptedData = $iv . $cipherText;

            return base64_encode($encryptedData);
        } catch (Exception $e) {
            // Handle the exception properly
            error_log("Encryption failed: " . $e->getMessage());
            return null;
        }
    }

    $secretKey = "hathwaycustKey";
    $originalString = "1292634163"; // Account No
    $salt = "pdfecafsalt";
    $encryptedString = getEncrypt($originalString, $secretKey, $salt);


?>
