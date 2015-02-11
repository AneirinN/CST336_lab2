<?php

/*
 * To change this template use Tools | Templates.
 * 
 * CST 336: Lab2
 * Team 7: Zach, Matt, Aneirin
 * 
 */


$suits = array(
    
    "1" => "img/clubs/1.png",
    "2" => "img/clubs/2.png",
    "3" => "img/clubs/3.png",
    "4" => "img/clubs/4.png",
    "5" => "img/clubs/5.png",
    "6" => "img/clubs/6.png",
    "7" => "img/clubs/7.png",
    "8" => "img/clubs/8.png",
    "9" => "img/clubs/9.png",
    "10" => "img/clubs/10.png",
    "11" => "img/clubs/.png",
    "12" => "img/clubs/.png",
    "13" => "img/clubs/.png",
    "14" => "diamonds",
    "15" => "diamonds",
    "16" => "diamonds",
    "17" => "diamonds",
    "18" => "diamonds",
    "19" => "diamonds",
    "20" => "diamonds",
    "21" => "diamonds",
    "22" => "diamonds",
    "23" => "diamonds",
    "24" => "diamonds",
    "25" => "diamonds",
    "26" => "diamonds",
    "27" => "diamonds",
    "28" => "hearts",
    "29" => "hearts",
    "30" => "hearts",
    "31" => "hearts",
    "32" => "hearts",
    "33" => "hearts",
    "34" => "hearts",
    "35" => "hearts",
    "36" => "hearts",
    "37" => "hearts",
    "38" => "hearts",
    "39" => "hearts",
    "40" => "hearts",
    "41" => "hearts",
    "42" => "spades",
    "43" => "spades",
    "44" => "spades",
    "45" => "spades",
    "46" => "spades",
    "47" => "spades",
    "48" => "spades",
    "49" => "spades",
    "50" => "spades",
    "51" => "spades",
    "52" => "spades",
    "11" => "spades",
    "12" => "spades",
    "13" => "spades",
    
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




