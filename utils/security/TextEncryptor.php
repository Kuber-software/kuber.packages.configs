<?php

namespace Kubersoftware\Utils\Security;

/**
 * Class TextEncryptor
 * @package Kubersoftware\Utils\Security
 * @link https://overcoder.net/q/885483/%D0%BA%D0%B0%D0%BA-%D0%BE%D0%B1%D1%80%D0%B0%D1%89%D0%B0%D1%82%D1%8C%D1%81%D1%8F-%D1%81-%D0%BA%D0%BB%D1%8E%D1%87%D0%BE%D0%BC-aes-%D0%B2-symfony
 */
class TextEncryptor
{
    /**
     * @var  string $secret
     */
    private string $secret;


    /**
     * Метод шифрования
     * @link https://www.php.net/manual/ru/function.openssl-get-cipher-methods.php
     */
    private const ENCRYPT_METHOD  = 'aes-256-cbc';


    public function __construct(string $secret)
    {
        $this->secret = $secret;
    }

    /**
     * @param $text
     * @return string
     */
    public function encrypt(string $text): ?string
    {
        if (null === $text) {
            return null;
        }

        // Generate an initialization vector
        $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length(self::ENCRYPT_METHOD));

        // Encrypt the data using AES 256 encryption in CBC mode using our encryption key and initialization vector.
        $encrypted = openssl_encrypt($text, self::ENCRYPT_METHOD, $this->secret, 0, $iv);

        // The $iv is just as important as the key for decrypting, so save it with our encrypted data using a unique separator (::)
        return base64_encode($encrypted . '::' . $iv);
    }

    /**
     * @param $text
     * @return string
     */
    public function decrypt(string $text): ?string
    {
        if (null === $text) {
            return null;
        }

        // To decrypt, split the encrypted data from our IV - our unique separator used was "::"
        [$encrypted_data, $iv] = explode('::', base64_decode($text), 2);

        return openssl_decrypt($encrypted_data, self::ENCRYPT_METHOD, $this->secret, 0, $iv);
    }
}