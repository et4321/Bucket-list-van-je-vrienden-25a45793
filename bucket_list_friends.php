<?php
echo"Hoeveel vrienden zal ik vragen om hun droom?".PHP_EOL;
$vrienden = readline();
$array = array();

for ($i=0; $i <= $vrienden-1 ; $i++){
    echo"Wat is je naam?".PHP_EOL;
    $naam = readline();
    echo"Wat is je droom?".PHP_EOL;
    $droom = readline();
    array_push ($array , $naam ,$droom);

    $data[$naam]=$droom;
} 

foreach ($data as $naam => $droom){
    echo"$naam zijn droom is $droom".PHP_EOL;
}




?>