<?php

    $player1 = array("Name" => "temp 1", "profilePic" => "src='img/diamonds/1.png' width ='70'", "hand" => array());
    $player1["hand"][] = array();
    
    $player2 = array("Name" => "temp 2", "profilePic" => "src='img/hearts/1.png' width ='70'" , "hand" => array());
    $player2["hand"][] = array();
    
    $player3 = array("Name" => "temp 3", "profilePic" => "src='img/clubs/1.png' width ='70'", "hand" => array());
    $player3["hand"][] = array();
    
    $player4 = array("Name" => "temp 4", "profilePic" => "src='img/spades/1.png' width ='70'", "hand" => array());
    $player4["hand"][] = array();
    
    function score() {
        
    }   
    
    
    
    function players($player1, $player2, $player3, $player4) {

        
        


        $turnOrder = array(1, 2, 3, 4);
        shuffle($turnOrder);
        for ($i=0; $i<4; $i++) {
            if ($turnOrder[$i] == 1) {

                echo $player1["Name"];
                echo "<img ".$player1["profilePic"]." />";
                echo '<br>';
                
            }
            else if ($turnOrder[$i] == 2) {
                echo $player2["Name"];
                echo "<img ".$player2["profilePic"]." />";
                echo '<br>';
            }
            else if ($turnOrder[$i] == 3) {
                echo $player3["Name"];
                echo "<img ".$player3["profilePic"]." />";
                echo '<br>';
            }
            else if ($turnOrder[$i] == 4) {
                echo $player4["Name"];
                echo "<img ".$player4["profilePic"]." />";
                echo '<br>';
            }
        }
        
    }
    
            
            
           
    
    
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
    
    
?>