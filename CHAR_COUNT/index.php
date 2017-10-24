<?php

namespace Cerynna;


class CharCount
{
    public function counter($string)
    {
        $string = preg_replace('/[^a-z]+/', '', strtolower($string));
        foreach (count_chars($string, 1) as $i => $val) {
            $table[chr($i)] =  $val;
        }
        arsort($table);
        return $table;
        //return $table;
    }
}




$text = "Exige beaucoup de toi-même et attends peu des autres. Ainsi beaucoup d'ennuis te seront épargnés.";

$test = new CharCount();

print_r($test->counter($text));

