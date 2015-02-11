<?php

//first player array

$matt = array();
$mattVal = 0;

for($i = 0; $i < 5; $i++)
    {
    
    $randKey = array_rand($suits); //find random key element
    
    $randVal = $suits[$randKey]; //take element from array and store
    
    array_push($matt, $randVal); //put element in hand array
    
    unset($suits[$randKey]); //remove element from card array
    
    $parts = explode("/", $randVal); //Split string by /'s
    
    $file = explode(".png", $parts['2']); //take last segment defined by / and cut along .png
    
    $mattVal += $file['0']; //take first part of cut _.png, getting card value and incrementing hand value
    
}


//second player

$anei = array();
$aneiVal = 0;

for($i = 0; $i < 5; $i++)
    {
    
    $randKey = array_rand($suits); //find random key element
    
    $randVal = $suits[$randKey]; //take element from array and store
    
    array_push($anei, $randVal); //put element in hand array
    
    unset($suits[$randKey]); //remove element from card array
    
    $parts = explode("/", $randVal); //Split string by /'s
    
    $file = explode(".png", $parts['2']); //take last segment defined by / and cut along .png
    
    $aneiVal += $file['0']; //take first part of cut _.png, getting card value and incrementing hand value
    
}

//third player

$zach = array();
$zachVal = 0;

for($i = 0; $i < 5; $i++)
    {
    
    $randKey = array_rand($suits); //find random key element
    
    $randVal = $suits[$randKey]; //take element from array and store
    
    array_push($zach, $randVal); //put element in hand array
    
    unset($suits[$randKey]); //remove element from card array
    
    $parts = explode("/", $randVal); //Split string by /'s
    
    $file = explode(".png", $parts['2']); //take last segment defined by / and cut along .png
    
    $zachVal += $file['0']; //take first part of cut _.png, getting card value and incrementing hand value
    
}

//fourth player

$hal = array();
$halVal = 0;

for($i = 0; $i < 5; $i++)
    {
    
    $randKey = array_rand($suits); //find random key element
    
    $randVal = $suits[$randKey]; //take element from array and store
    
    array_push($hal, $randVal); //put element in hand array
    
    unset($suits[$randKey]); //remove element from card array
    
    $parts = explode("/", $randVal); //Split string by /'s
    
    $file = explode(".png", $parts['2']); //take last segment defined by / and cut along .png
    
    $halVal += $file['0']; //take first part of cut _.png, getting card value and incrementing hand value
    
}

?>