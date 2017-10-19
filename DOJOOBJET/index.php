<?php

namespace Crypt;

class Encrypt
{

    public function crypt ($text, $key) {
        $splits = str_split($text);

        foreach($splits as $split)
        {

            $encrypts = ord($split) + $key;

            if ($encrypts >= 32 && $encrypts <= 122) {
                $crypts[] = chr($encrypts);
            }
            else {
                $crypts[] = chr(($encrypts - 132) + 32);
            }
           // $crypts[] = chr(ord($split) + $this->key);
        }

        $crypt = implode('', $crypts);
        return $crypt;

    }
    public function decrypt($text, $key) {
        $splits = str_split($text);

        foreach($splits as $split)
        {

            $decrypts = ord($split) - $key;

            if ($decrypts >= 32 && $decrypts <= 122) {
                $crypts[] = chr($decrypts);
            }
            else {
                $crypts[] = chr(($decrypts - 32) + 122);
            }
            // $crypts[] = chr(ord($split) + $this->key);
        }

        $crypt = implode('', $crypts);
        return $crypt;

    }

}


$pirate = new \Crypt\Encrypt( );



print_r($pirate->crypt('Je code 4 Lyon', '1'));
echo PHP_EOL;
print_r($pirate->decrypt('Kf!dpef!5!Mzpo', '1'));

?>


