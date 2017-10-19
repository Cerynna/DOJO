<?php

/*Pierre
function random($number){


}
*/

/*Darin
function random(){

}
*/

/*
Pierrick
$function tableint(){

    for (i=1, i=50, i++)
        table
}
*/


/*
//Alban
$myArray = [];
function random(){
    for ($i=1;$i<= 50, $i++){
        $myArray += rand(1,100);

    }
print_r($myArray);
}

random();
*/

//Jeremy

function random (&$number, &$banban)
{
    for ($i = 1; $i <= 50; $i++) {
        $number[] = rand(1, 100);
        $banban[] = rand(2, 50);
    }

    asort($number);
    asort($banban);

    $new_array = array();

    foreach ($banban AS $key => $value) {
        $new_array[] = $value;
    }
    $banban = $new_array;

}

random($jeremy, $pierre);


echo "<pre>";
print_r($pierre);
echo "</pre>";
echo count($pierre);

echo "<pre>";
print_r($jeremy);
echo "</pre>";
echo count($jeremy);