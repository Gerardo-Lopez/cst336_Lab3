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





    $player1 = array("Name" => "dash", "profilePic" => "src='img/pictures/dash.jpg' width ='70'", "hand" => array());
    $player1["hand"][] = array();
    
    $player2 = array("Name" => "violet", "profilePic" => "src='img/pictures/violet.jpg' width ='70'" , "hand" => array());
    $player2["hand"][] = array();
    
    $player3 = array("Name" => "mr-incredible", "profilePic" => "src='img/pictures/mr-incredible.jpg' width ='70'", "hand" => array());
    $player3["hand"][] = array();
    
    $player4 = array("Name" => "elastigirl", "profilePic" => "src='img/pictures/elastigirl.jpg' width ='70'", "hand" => array());
    $player4["hand"][] = array();
    
    function score() {
        
    }   
    
        shuffle($deck);

    
    
    // function players($player1, $player2, $player3, $player4) {

        $turnOrder = array(1, 2, 3, 4);
        shuffle($turnOrder);
        for ($i=0; $i<4; $i++) {
            if ($turnOrder[$i] == 1) {

                echo $player1["Name"];
                echo "<img ".$player1["profilePic"]." />";
                // deal_hand1($deck);
                // echo '<br>';
                        for ($card = 0; $card <= 52; $card++){
                        if($score1 <= 36){
                            
                            $score1 += $deck[$card][0];         // increments score
                            echo $score1;
                            $deltCard = array_shift($deck); // POP THIS
                            echo "<img ".$deck[$card][2]." />"; // echo's picture
                            
                        }
                        else
                            break;
                        } 
                        echo '<br>';
                
            }
            else if ($turnOrder[$i] == 2) {
                echo $player2["Name"];
                echo "<img ".$player2["profilePic"]." />";
                // echo '<br>';
                // function deal_hand2($deck){
                        for ($card = 0; $card <= 52; $card++){
                        if($score2 <= 36){
                            
                            $score2 += $deck[$card][0];         // increments score
                            echo $score2;
                            $deltCard = array_shift($deck);
                            echo "<img ".$deck[$card][2]." />"; // echo's picture
                            
                        
                        }
                        else
                            break;
                        
                        } 
                        echo '<br>';
            // }
            }
            else if ($turnOrder[$i] == 3) {
                echo $player3["Name"];
                echo "<img ".$player3["profilePic"]." />";
                // echo '<br>';
                // function deal_hand3($deck){
                        for ($card = 0; $card <= 52; $card++){
                        if($score3 <= 36){
                            
                            $score3 += $deck[$card][0];         // increments score
                            echo $score3;
                            $deltCard = array_shift($deck);
                            echo "<img ".$deck[$card][2]." />"; // echo's picture
                            
                        }
                        else 
                            break;
                        }
                        echo '<br>';
            // }
            }
            else if ($turnOrder[$i] == 4) {
                echo $player4["Name"];
                echo "<img ".$player4["profilePic"]." />";
                // echo '<br>';
                // function deal_hand4($deck){
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
            // }
            }
        }
        
    // }
    
            
            
           
    
    
            //     for ($i = 0; $i < 1; $i++){
                // echo $player1["Name"];
                // echo "<img ".$player1["profilePic"]." />";
                // echo '<br>';
                
            // }
            //     for ($i = 0; $i < 1; $i++){
            //     echo $player2["Name"];
            //     echo "<img ".$player2["profilePic"]." />";
            //     echo '<br>';
                
            // }
            //     for ($i = 0; $i < 1; $i++){
            //     echo $player3["Name"];
            //     echo "<img ".$player3["profilePic"]." />";
            //     echo '<br>';
                
            // }
            
            echo $deltCard;
?>