<?php



               $deck = array("numCards" => 52, "cards" => array());
               
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
                
                function shuffe_deck(){
                    return shuffle($deck["cards"]);
                }

            foreach ($deck["cards"] as $cards){
                echo $cards ["value"];
                echo $cards ["suit"];
                echo "<img ".$cards ["img"]." />";
                echo '<br>';
}
    
?>