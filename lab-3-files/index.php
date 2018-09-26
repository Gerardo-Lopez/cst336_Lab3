<?php

// include 'inc/cards.php';
include 'inc/players.php'
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
            $time_start = microtime(true); 
            // I AM EMPTY
            players($player1, $player2, $player3, $player4);
            echo 'Total execution time in seconds: ' . (microtime(true) - $time_start);
            ?>
            
        </div>
        
        <form>
            <input type="submit" value="Play Again!"/>
        </form>
    </body>
</html>
