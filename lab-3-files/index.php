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
            $time_start = microtime(true); 
            // I AM EMPTY

            // players($player1, $player2, $player3, $player4);
            // shuffle_deck($deck);
            
            // deal_hands($player1, $deck);
            
            // players($player1, $player2, $player3, $player4);
            // echo 'Total execution time in seconds: ' . (microtime(true) - $time_start);


                for($card = 0; $card < 53; $card++){
                    for ($trait = 0; $trait < 3; $trait++){
                    
                    if($trait == 2)
                    echo "<img ".$deck[$card][$trait]." />";
                    
                    else
                    echo $deck[$card][$trait];    
                    }
                
                echo '<br>';    
                }
                
                echo '<h3>Done</h3>';
                
            $score1 = 0;
            $score2 = 0;
            $score3 = 0;
            $score4 = 0;

            function deal_hand1($deck){
                        for ($card = 0; $card <= 52; $card++){
                        if($score1 <= 36){
                            
                            $score1 += $deck[$card][0];         // increments score
                            echo $score1;
                            echo "<img ".$deck[$card][2]." />"; // echo's picture
                            $deltCard = array_shift($deck);
                        }
                        else
                            break;
                        } 
                        echo '<br>';
            }


            function deal_hand2($deck){
                        for ($card = 0; $card <= 52; $card++){
                        if($score2 <= 36){
                            
                            $score2 += $deck[$card][0];         // increments score
                            echo $score2;
                            echo "<img ".$deck[$card][2]." />"; // echo's picture
                            $deltCard = array_shift($deck);
                        
                        }
                        else
                            break;
                        
                        } 
                        echo '<br>';
            }

            function deal_hand3($deck){
                        for ($card = 0; $card <= 52; $card++){
                        if($score3 <= 36){
                            
                            $score3 += $deck[$card][0];         // increments score
                            echo $score3;
                            echo "<img ".$deck[$card][2]." />"; // echo's picture
                            $deltCard = array_shift($deck);
                        }
                        else 
                            break;
                        }
                        echo '<br>';
            }

            function deal_hand4($deck){
                        for ($card = 0; $card <= 52; $card++){
                        if($score4 <= 36){
                            
                            $score4 += $deck[$card][0];         // increments score
                            echo $score4;
                            echo "<img ".$deck[$card][2]." />"; // echo's picture
                            $deltCard = array_shift($deck);
                        }
                        else
                            break;
                        }
                        echo '<br>';
            }









                        echo '<h3>Done</h3>';
                        


                    // foreach ($deck["cards"] as $cards){
                        
                    //     if ($score1 >= 36)
                    //     break;
                        
                    //     $score1 += $cards["value"];
                    //     echo "<img ".$cards ["img"]." />";
                    //     echo $score1;
                    //     $handDelt = array_shift($deck["cards"]); // not yet working
                    //     echo '<br>';
                    // }
                    
                // } 
                
            // }
                 
            
            deal_hand1($deck);
            deal_hand2($deck);
            deal_hand3($deck);            
            deal_hand4($deck);            
            
            
                            for($card = 0; $card < 52; $card++){
                    for ($trait = 0; $trait < 3; $trait++){
                    
                    if($trait == 2)
                    echo "<img ".$deck[$card][$trait]." />";
                    
                    else
                    echo $deck[$card][$trait];    
                    }
                
                echo '<br>';    
                }
                
                echo '<h3>Done</h3>';


            ?>
            
        </div>
        
        <form>
            <input type="submit" value="Play Again!"/>
        </form>
    </body>
</html>
