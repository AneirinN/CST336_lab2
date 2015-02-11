<?php

//first player array

$matt = array();

for($i = 0; $i < 5; $i++)
    {
    
    $randKey = array_rand($suits);
    $randVal = getArray()[$randKey];
    
    array_push($matt, $randVal); //put element in hand array
    
    unset($suits[$randKey]); //remove element from card array
    
    //array_values($suits); //reindex array in case of issue with unset + array_rand
    
}

$matt = array();

for($i = 0; $i < 5; $i++)
    {
    
    $randKey = array_rand($suits);
    $randVal = getArray()[$randKey];
    
    array_push($matt, $randVal); //put element in hand array
    
    unset($suits[$randKey]); //remove element from card array
    
    //array_values($suits); //reindex array in case of issue with unset + array_rand
    
}


?>