<?php



                $deck = array(array());
               
            
                for($t = 1;$t <= 52;$t++) {
                    
                    
                    if($t <= 13 ) {
                        
                        $deck [$t][0] = $t;
                        $deck [$t][1] = "clubs";
                        $deck [$t][2] = "src='img/clubs/$t.png' title='$t of clubs' width ='70'";
                        
                        array_push($deck, array());
                    }
                    else if($t > 13 && $t <= 26 ) {
                        $s = $t - 13;
                        
                        $deck [$t][0] = $s;
                        $deck [$t][1] = "diamonds";
                        $deck [$t][2] = "src='img/diamonds/$s.png' title='$s of diamonds' width ='70'";
                        
                        array_push($deck, array());                        
                        
                    }
                    else if($t > 26 && $t <= 39 ) {
                        $s = $t - 26;
                        
                        $deck [$t][0] = $s;
                        $deck [$t][1] = "hearts";
                        $deck [$t][2] = "src='img/hearts/$s.png' title='$s of hearts' width ='70'";
                        
                        array_push($deck, array());                        
                        
                    }
                    else if($t > 39 && $t <= 52 ) {
                        $s = $t - 39;

                        $deck [$t][0] = $s;
                        $deck [$t][1] = "spades";
                        $deck [$t][2] = "src='img/spades/$s.png' title='$s of spades' width ='70'";
                        
                    }
                }
                
                // function shuffle_deck($deck){
                     shuffle($deck);
                
                

                
                
                
            //     foreach ($deck["cards"] as $cards){
            //     echo $cards["value"];
            //     echo $handDelt = array_shift($cards["value"]);
            //     echo $cards ["suit"];
            //     echo $handDelt = array_shift($cards["suits"]);
            //     echo "<img ".$cards ["img"]." />";
            //     echo $handDelt = array_shift($cards["img"]);
                
            //     echo '<br>';
            // }
            // echo 'DONE';
            
            // echo '<br>';
            
                // }
                
                // shuffle_deck($deck);



            
            
            // deal_hands($player1, $deck["cards"]);
            // echo 'DONE';
            // echo '<br>';
            // foreach ($deck["cards"] as $cards){
            //     echo $cards ["value"];
            //     echo $cards ["suit"];
            //     echo "<img ".$cards ["img"]." />";
            //     echo '<br>';
            // }
            
    
?>