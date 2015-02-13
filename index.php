<?php

/*
 * To change this template use Tools | Templates.
 * 
 * CST 336: Lab2
 * Team 7: Zach, Matt, Aneirin
 * 
 */

$suits = array(
    
    "0" => "img/cards/clubs/1.png",
    "1" => "img/cards/clubs/2.png",
    "2" => "img/cards/clubs/3.png",
    "3" => "img/cards/clubs/4.png",
    "4" => "img/cards/clubs/5.png",
    "5" => "img/cards/clubs/6.png",
    "6" => "img/cards/clubs/7.png",
    "7" => "img/cards/clubs/8.png",
    "8" => "img/cards/clubs/9.png",
    "9" => "img/cards/clubs/10.png",
    "10" => "img/cards/clubs/11.png",
    "11" => "img/cards/clubs/12.png",
    "12" => "img/cards/clubs/13.png",
    "13" => "img/cards/diamonds/1.png",
    "14" => "img/cards/diamonds/2.png",
    "15" => "img/cards/diamonds/3.png",
    "16" => "img/cards/diamonds/4.png",
    "17" => "img/cards/diamonds/5.png",
    "18" => "img/cards/diamonds/6.png",
    "19" => "img/cards/diamonds/7.png",
    "20" => "img/cards/diamonds/8.png",
    "21" => "img/cards/diamonds/9.png",
    "22" => "img/cards/diamonds/10.png",
    "23" => "img/cards/diamonds/11.png",
    "24" => "img/cards/diamonds/12.png",
    "25" => "img/cards/diamonds/13.png",
    "26" => "img/cards/hearts/1.png",
    "27" => "img/cards/hearts/2.png",
    "28" => "img/cards/hearts/3.png",
    "29" => "img/cards/hearts/4.png",
    "30" => "img/cards/hearts/5.png",
    "31" => "img/cards/hearts/6.png",
    "32" => "img/cards/hearts/7.png",
    "33" => "img/cards/hearts/8.png",
    "34" => "img/cards/hearts/9.png",
    "35" => "img/cards/hearts/10.png",
    "36" => "img/cards/hearts/11.png",
    "37" => "img/cards/hearts/12.png",
    "38" => "img/cards/hearts/13.png",
    "39" => "img/cards/spades/1.png",
    "40" => "img/cards/spades/2.png",
    "41" => "img/cards/spades/3.png",
    "42" => "img/cards/spades/4.png",
    "43" => "img/cards/spades/5.png",
    "44" => "img/cards/spades/6.png",
    "45" => "img/cards/spades/7.png",
    "46" => "img/cards/spades/8.png",
    "47" => "img/cards/spades/9.png",
    "48" => "img/cards/spades/10.png",
    "49" => "img/cards/spades/11.png",
    "50" => "img/cards/spades/12.png",
    "51" => "img/cards/spades/13.png",
);

$pointsOff = array(); //array to track deviation from 42
  
//first player array

$matt = array();
$mattVal = 0;
echo "<div id='wrapper'>";
echo "<img src='./img/players/matt.png'>";

for($i = 0; $i < 5; $i++)
    {
    
    $randKey = array_rand($suits); //find random key element
    
    $randVal = $suits[$randKey]; //take element from array and store
    
    array_push($matt, $randVal); //put element in hand array
    
    unset($suits[$randKey]); //remove element from card array
    
    $parts = explode("/", $randVal); //Split string by /'s
    
    $file = explode(".png", $parts['3']); //take last segment defined by / and cut along .png
    $file = ($randKey % 13)+1;
    $mattVal += $file;  //Zach changed it to this because I had to change the array because we were missing the cards folder in all the array.
    //$mattVal += $file['1']; //take first part of cut _.png, getting card value and incrementing hand value
    echo "<img src='$randVal'>";
    
}
    echo "  $mattVal  ";
    echo "</br>";
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
echo "<img src='./img/players/aneirin.png'>";
for($i = 0; $i < 5; $i++)
    {
    
    $randKey = array_rand($suits); //find random key element
    
    $randVal = $suits[$randKey]; //take element from array and store
    
    array_push($anei, $randVal); //put element in hand array
    
    unset($suits[$randKey]); //remove element from card array
    
    $parts = explode("/", $randVal); //Split string by /'s
    
    $file = explode(".png", $parts['3']); //take last segment defined by / and cut along .png
    $file = ($randKey % 13)+1;
    $aneiVal += $file;
    //$aneiVal += $file['1']; //take first part of cut _.png, getting card value and incrementing hand value
     echo "<img src='$randVal'>";
    
}
echo "  $aneiVal  ";
    echo "</br>";
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
echo "<img src='./img/players/zach.png'>";

for($i = 0; $i < 5; $i++)
    {
    
    $randKey = array_rand($suits); //find random key element
    
    $randVal = $suits[$randKey]; //take element from array and store
    
    array_push($zach, $randVal); //put element in hand array
    
    unset($suits[$randKey]); //remove element from card array
    
    $parts = explode("/", $randVal); //Split string by /'s
    
    $file = explode(".png", $parts['3']); //take last segment defined by / and cut along .png
    $file = ($randKey % 13)+1;
    $zachVal += $file;
    //$zachVal += $file['1']; //take first part of cut _.png, getting card value and incrementing hand value
    echo "<img src='$randVal'>";
    
}
echo "  $zachVal  ";
    echo "</br>";
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
echo "<img src='./img/players/hal.png'>";

for($i = 0; $i < 5; $i++)
    {
    
    $randKey = array_rand($suits); //find random key element
    
    $randVal = $suits[$randKey]; //take element from array and store
    
    array_push($hal, $randVal); //put element in hand array
    
    unset($suits[$randKey]); //remove element from card array
    
    $parts = explode("/", $randVal); //Split string by /'s
    
    $file = explode(".png", $parts['3']); //take last segment defined by / and cut along .png
    $file = ($randKey % 13)+1;
    $halVal += $file;
    //$halVal += $file['0']; //take first part of cut _.png, getting card value and incrementing hand value
    
    echo "<img src='$randVal'>";
    
}
echo "  $halVal  ";
    echo "</br>";
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
echo "</div>";

//TODO: display cards, values, pictures
/*
 * some CSS nonsense w/ html to get pretty picture
 * Zach/Aneirin can you take care of this?
 * relevant variables are $matt etc for the hand arrays, $mattVal etc for value of hands,
 * $tie as a bool to control what we output, $min_key which tells us who won (if no tie)
 * I've already done a loose implementation of the winner message, it just needs to be adapted into a html/css friendly one that
 * also displays the images. All the logic is complete.
 * Code is tested (not extensively yet though), and functions as intended. Up to you guys now.
 * -Matt
 */
    
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
         <link href="css/styles.css" rel="stylesheet" />
    </head>
    
    <body>
        <div id="wrapper">
            
        

        <!--  -->

       
        <form action="index.php" method="get">
            <input type="submit" value="Play Again">
        </form>
        </div>
        <footer>&copy; Created by: Team 7</footer>
    </body>

    
    
</html>




