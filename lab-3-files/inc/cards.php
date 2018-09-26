<?php



                $deck = array("cards" => array());
               
                $deck["cards"][] = array();
            
                for($t = 1;$t <= 52;$t++) {
                    
                    if($t <= 13 ) {
                        $deck["cards"][$t]["value"] = $t;
                        $deck["cards"][$t]["suit"] = "clubs";
                        $deck["cards"][$t]["img"] = "src='img/clubs/$t.png' title='$t of clubs' width ='70'";
                    }
                    else if($t > 13 && $t <= 26 ) {
                        $s = $t - 13;
                        $deck["cards"][$t]["value"] = $s;
                        $deck["cards"][$t]["suit"] = "diamonds";
                        $deck["cards"][$t]["img"] = "src='img/diamonds/$s.png' title='$s of diamonds' width ='70'";
                    }
                    else if($t > 26 && $t <= 39 ) {
                        $s = $t - 26;
                        $deck["cards"][$t]["value"] = $s;
                        $deck["cards"][$t]["suit"] = "hearts";
                        $deck["cards"][$t]["img"] = "src='img/hearts/$s.png' title='$s of hearts' width ='70'";
                    }
                    else if($t > 39 && $t <= 52 ) {
                        $s = $t - 39;
                        $deck["cards"][$t]["value"] = $s;
                        $deck["cards"][$t]["suit"] = "spades";
                        $deck["cards"][$t]["img"] = "src='img/spades/$s.png' title='$s of spades' width ='70'";
                        
                    }
                }
                
                // function shuffle_deck($deck){
                     shuffle($deck["cards"]);
                     
                foreach ($deck["cards"] as $cards){
                echo $cards ["value"];
                echo $cards ["suit"];
                echo "<img ".$cards ["img"]." />";
                
                echo '<br>';
            }
            echo 'DONE';
            
            echo '<br>';
            
                // }
                
                // shuffle_deck($deck);


            $score1 = 0;
            $score2 = 0;
            $score3 = 0;
            $score4 = 0;

            function deal_hands($player1, $deck){
                for ($i = 1; $i < 10; $i++){
                    // while ($score1 <= 36){
                    foreach ($deck["cards"] as $cards){
                        
                        if ($score1 >= 36)
                        break;
                        
                        $score1 += $cards["value"];
                        echo "<img ".$cards ["img"]." />";
                        echo $score1;
                        $handDelt = array_shift($deck["cards"]); // not yet working
                        echo '<br>';
                    }
                    
                // } 
                
            }
            }
            deal_hands($player1, $deck);
            echo 'DONE';
            echo '<br>';
            foreach ($deck["cards"] as $cards){
                echo $cards ["value"];
                echo $cards ["suit"];
                echo "<img ".$cards ["img"]." />";
                echo '<br>';
            }
            
    
?>