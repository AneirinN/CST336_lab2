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
    "24" => "img/diamonds/",
    "25" => "img/diamonds/",
    "26" => "img/diamonds/",
    "27" => "img/hearts/",
    "28" => "img/hearts/",
    "29" => "img/hearts/",
    "30" => "img/hearts/",
    "31" => "img/hearts/",
    "32" => "img/hearts/",
    "33" => "img/hearts/",
    "34" => "img/hearts/",
    "35" => "img/hearts/",
    "36" => "img/hearts/",
    "37" => "img/hearts/",
    "38" => "img/hearts/",
    "39" => "img/hearts/",
    "40" => "img/hearts/",
    "41" => "img/spades/",
    "42" => "img/spades/",
    "43" => "img/spades/",
    "44" => "img/spades/",
    "45" => "img/spades/",
    "46" => "img/spades/",
    "47" => "img/spades/",
    "48" => "img/spades/",
    "49" => "img/spades/",
    "50" => "img/spades/",
    "51" => "img/spades/",
    "52" => "img/spades/",
    "53" => "img/spades/",
    "54" => "img/spades/",
    
);



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

        <?= drawCards() ?>  
        <form action="index.php" method="get">
            <input type="submit" value="Play Again">
        </form>
        
        <footer>&copy; Created by: Team 7</footer>
    </body>

    
    
</html>




