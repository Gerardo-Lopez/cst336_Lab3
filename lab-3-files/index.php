<?php

include 'inc/cards.php';
include 'inc/players.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Cards </title>
        <style>
            /*@import url("css/styles.css");*/
        </style>
    </head>
    <body>
        <div id="main"> 
            
            <?php
            
            // I AM EMPTY
            // players($player1, $player2, $player3, $player4);
            // shuffle_deck($deck);
            
            deal_hands($player1, $deck);
            ?>
            
        </div>
    </body>
</html>
