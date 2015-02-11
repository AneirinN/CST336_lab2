<?php

/*
 * To change this template use Tools | Templates.
 * 
 * CST 336: Lab2
 * Team 7: Zach, Matt, Aneirin
 * 
 */


$suits = array(
    "0" => "clubs",
    "1" => "clubs",
    "2" => "clubs",
    "3" => "clubs",
    "4" => "clubs",
    "5" => "clubs",
    "6" => "clubs",
    "7" => "clubs",
    "8" => "clubs",
    "9" => "clubs",
    "10" => "clubs",
    "11" => "clubs",
    "12" => "clubs",
    "13" => "clubs",
    "0" => "clubs",
    "1" => "clubs",
    "2" => "clubs",
    "3" => "clubs",
    "4" => "clubs",
    "5" => "clubs",
    "6" => "clubs",
    "7" => "clubs",
    "8" => "clubs",
    "9" => "clubs",
    "10" => "clubs",
    "11" => "clubs",
    "12" => "clubs",
    "13" => "clubs",
    "0" => "clubs",
    "1" => "clubs",
    "2" => "clubs",
    "3" => "clubs",
    "4" => "clubs",
    "5" => "clubs",
    "6" => "clubs",
    "7" => "clubs",
    "8" => "clubs",
    "9" => "clubs",
    "10" => "clubs",
    "11" => "clubs",
    "12" => "clubs",
    "13" => "clubs",
    "0" => "clubs",
    "1" => "clubs",
    "2" => "clubs",
    "3" => "clubs",
    "4" => "clubs",
    "5" => "clubs",
    "6" => "clubs",
    "7" => "clubs",
    "8" => "clubs",
    "9" => "clubs",
    "10" => "clubs",
    "11" => "clubs",
    "12" => "clubs",
    "13" => "clubs",
    
    "1" => "diamonds",
    "2" => "hearts",
    "3" => "spades",
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




