<?php
/*
Travail sur : tableau de tableau, switch boucle for
Le but de ce dojo est d'exécuter des calculs sur une matrice.
En entrée:
une matrice de 3 par 3 sous forme de tableau : [[0, 0, 0], [0, 0, 0], [0, 0, 0]]
une opération à effectuer "x, /, +, -"
une valeur entière à appliquer
en retour une matrice contenant le resultat de l'opération
Exemple :
calcule([[0, 0, 0], [0, 0, 0], [0, 0, 0]], "+", "5")
doit retourner
[[5, 5, 5], [5, 5, 5], [5, 5, 5]]
*/

// Darin
/*class Matrix {

    public $numbers;
    public $keys;
    public $value;

    public function calcule ($numbers, $keys, $value) {
        public $calcul = [];
        foreach ($numbers as $number) {
            foreach ($number as $result) {
                switch($value) {

                }
            }
        }
    }

}*/
// Alban
/*class Matrix {
    public $arrays= [];
    public $what = "";
    public $number;

    public function calcule($arrays, $what, $number){
        foreach ($arrays as $array){
            switch ($what){
                case "+":
                    foreach ($array as $result){
                        $result. $what.$number;
                    }
                    break;
                case "-":
                    foreach ($array as $result){
                        $result. $what.$number;
                    }
                    break;
                case "/":
                    foreach ($array as $result){
                        $result. $what.$number;
                    }
                    break;
                case "*":
                    foreach ($array as $result){
                        $result. $what.$number;
                    }
                    break;
            }
            return $result;
        }
    }


}*/


// Jérémy
/*class Matrix{
    public $arrays;
    public $sign;
    public $value;

    public function calcule($arrays,$sign,$value){
        switch ($sign){
            case "+":
                break;
            case "-":
                break;
            case "/":
                break;
            case "*":
                break;
        }
    }
}*/

// Pierrick

class Matrix
{
    public function calcule($arrayTable, $sign, $value)
    {
        foreach ($arrayTable as $arrays) {
            unset($stock);
            foreach ($arrays as $array) {
                switch ($sign) {
                    case "+";
                         $stock[] = $array + $value;
                        break;
                    case "-";
                        $stock[] = $array - $value;
                        break;
                    case "/";
                        $stock[] = $array / $value;
                        break;
                    case "*";
                        $stock[] = $array * $value;
                        break;
                }
            }
            $deuxStock[] = $stock;
        }
        return $deuxStock;
    }
}


$test = new Matrix();

$afficher = $test->calcule([[6, 6, 4], [4, 4, 4], [8, 8, 8]], "/", "2");

print_r($afficher);