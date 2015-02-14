<?php

$pointsOff = array(); //array to track deviation from 42
  
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

$mattDiff = 0; //Difference defaults to zero, if is different than 42 (greater or less than), if statements catch that

if($mattVal < 42)
{
    $mattDiff = 42 - $mattVal;
}    

else if($mattVal > 42)
{
    $mattDiff = $mattVal - 42;    
}

array_push($pointsOff, $mattDiff); //push deviation value onto array

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

$aneiDiff = 0; //Difference defaults to zero, if is different than 42 (greater or less than), if statements catch that

if($aneiVal < 42)
{
    $aneiDiff = 42 - $aneiVal;
}    

else if($aneiVal > 42)
{
    $aneiDiff = $aneiVal - 42;    
}

array_push($pointsOff, $aneiDiff); //push deviation value onto array

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

$zachDiff = 0; //Difference defaults to zero, if is different than 42 (greater or less than), if statements catch that

if($zachVal < 42)
{
    $zachDiff = 42 - $zachVal;
}    

else if($zachVal > 42)
{
    $zachDiff = $zachVal - 42;    
}

array_push($pointsOff, $zachDiff); //push deviation value onto array


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

$halDiff = 0; //Difference defaults to zero, if is different than 42 (greater or less than), if statements catch that

if($halVal < 42)
{
    $halDiff = 42 - $halVal;
}    

else if($halVal > 42)
{
    $halDiff = $halVal - 42;    
}

array_push($pointsOff, $halDiff); //push deviation value onto array


$tie = false; //if find a tie, just set to true, will use to change message to "It's a Tie" using if($tie)

$min_key = -1; //min_key value of 0 is matt, 1 is anei, etc. not the most elegant solution but I'm lazy

$min_value = 10000; //arbitrarily large number to insure that first iteration of loop compares favorably as a min value

foreach($pointsOff as $key => $value)  
{
    if($value == $min_value) //have to do this check first otherwise it is autotrue from first iteration
    {
         $tie = true;
    }   
    
    if($value < $min_value)
    {
        $min_value = $value;
        $min_key = $key;
    }
}

if($tie) //check if there is a tie
{
    echo "It's a Tie";
}

else //if not, find out who won
{
    switch($min_key)
    {
        case 0:
            echo "Matt wins!";
            break;
        case 1:
            echo "Aneirin wins!";
            break;
        case 2:
            echo "Zach wins!";
            break;
        case 3:
            echo "Hal wins!";
            break;
    }
}

?>