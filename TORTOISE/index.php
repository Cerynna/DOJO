<?php
function race($v1, $v2, $g)
{
    $distanceRencontre = ($g * $v1) / ($v2 - $v1);
    $tempsFinal = ($distanceRencontre / $v1) * 3600;

    $heures = floor($tempsFinal / 3600);
    $minutes = floor(($tempsFinal % 3600) / 60);
    $secondes = floor((($tempsFinal % 3600) % 60));

    echo $heures . "-" . $minutes . "-" . $secondes;

    return $timer = array($heures, $minutes, $secondes);

//return $timer;

}