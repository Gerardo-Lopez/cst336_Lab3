<?php

// include 'inc/cards.php';
include 'inc/players.php'


?>

<!DOCTYPE html>
<html>
    <head>
        <title> Cards </title>
            <link href="css/style5.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <h1 class="center">Silver Jack</h1>
        <hr>
        <br />
        <br />
        <div id="main"> 
            <?php
            $time_start = microtime(true); 
            // I AM EMPTY
            players($player1, $player2, $player3, $player4);
            ?>
            
        </div>
        <br />
        <br />
        <hr>
        <div id="main2">
            <?php
                echo 'Total execution time in seconds: ' . (microtime(true) - $time_start);
            ?>
            <form id= main3>
                <input type="submit" value="Play Again!"/>
            </form>
        </div>
    </body>
</html>
