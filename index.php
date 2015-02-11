<?php

/*
 * To change this template use Tools | Templates.
 * 
 * CST 336: Lab2
 * Team 7: Zach, Matt, Aneirin
 * 
 */

$suits = array(
    
    "0" => "img/clubs/1.png",
    "1" => "img/clubs/2.png",
    "2" => "img/clubs/3.png",
    "3" => "img/clubs/4.png",
    "4" => "img/clubs/5.png",
    "5" => "img/clubs/6.png",
    "6" => "img/clubs/7.png",
    "7" => "img/clubs/8.png",
    "8" => "img/clubs/9.png",
    "9" => "img/clubs/10.png",
    "10" => "img/clubs/11.png",
    "11" => "img/clubs/12.png",
    "12" => "img/clubs/13.png",
    "13" => "img/diamonds/1.png",
    "14" => "img/diamonds/2.png",
    "15" => "img/diamonds/3.png",
    "16" => "img/diamonds/4.png",
    "17" => "img/diamonds/5.png",
    "18" => "img/diamonds/6.png",
    "19" => "img/diamonds/7.png",
    "20" => "img/diamonds/8.png",
    "21" => "img/diamonds/9.png",
    "22" => "img/diamonds/10.png",
    "23" => "img/diamonds/11.png",
    "24" => "img/diamonds/12.png",
    "25" => "img/diamonds/13.png",
    "26" => "img/hearts/1.png",
    "27" => "img/hearts/2.png",
    "28" => "img/hearts/3.png",
    "29" => "img/hearts/4.png",
    "30" => "img/hearts/5.png",
    "31" => "img/hearts/6.png",
    "32" => "img/hearts/7.png",
    "33" => "img/hearts/8.png",
    "34" => "img/hearts/9.png",
    "35" => "img/hearts/10.png",
    "36" => "img/hearts/11.png",
    "37" => "img/hearts/12.png",
    "38" => "img/hearts/13.png",
    "39" => "img/spades/1.png",
    "40" => "img/spades/2.png",
    "41" => "img/spades/3.png",
    "42" => "img/spades/4.png",
    "43" => "img/spades/5.png",
    "44" => "img/spades/6.png",
    "45" => "img/spades/7.png",
    "46" => "img/spades/8.png",
    "47" => "img/spades/9.png",
    "48" => "img/spades/10.png",
    "49" => "img/spades/11.png",
    "50" => "img/spades/12.png",
    "51" => "img/spades/13.png",
);

  
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





<!DOCTYPE html>

<html>
    <head>
        <title>Lab 2: Multiplying Playing Cards</title>
        <meta charset="utf-8" />
        
        <style>
        .symbols {
            font-size: 6em;
        }
        </style>
    </head>
    
    <body>


        <!--  -->

       
        <form action="index.php" method="get">
            <input type="submit" value="Play Again">
        </form>
        
        <footer>&copy; Created by: Team 7</footer>
    </body>

    
    
</html>




