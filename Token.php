<?php

class Token
{
    public function generate($type, $length, $hash = false)
    {
        if ($type == 'alpha') {
            $random_string = substr(str_shuffle(str_repeat('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz', $length)), 0, $length);
        }

        if ($type == 'alnum') {
            $random_string = substr(str_shuffle(str_repeat('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890', $length)), 0, $length);
        }

        if ($type == 'numeric') {
            $random_string = substr(str_shuffle(str_repeat('1234567890', $length)), 0, $length);
        }

        if ($type == 'nozero') {
            $random_string = substr(str_shuffle(str_repeat('123456789', $length)), 0, $length);
        }

        if ($hash == true) {
            return password_hash(trim($random_string), PASSWORD_DEFAULT);
        } else {
            return trim($random_string);
        }
    }

    public function validasi($token, $validasi, $hash = false)
    {
        if ($hash == true) {
            if (password_verify($token, $validasi)) {
                echo "Token benar";
            } else {
                echo 'Token salah';
            }
        } else {
            if ($token == $validasi) {
                echo "Token benar";
            } else {
                echo 'Token salah';
            }
        }
    }
}
