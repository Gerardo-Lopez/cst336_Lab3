<?php

include 'inc/cards.php';

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
                //printall();      
                
                $deck = array("numCards" => 52, "cards" => array());
    
                $deck["cards"][] = array();
                
                
                
                for($t = 1;$t <= 52;$t++) {
                    
                    if($t <= 13 ) {
                        //$deck["cards"][$t]["value"] = $t;
                        //$deck["cards"][$t]["suit"] = "clubs";
                        $deck["cards"][$t]["img"] = "src='img/$t.png'";
                    }
                    else if($t > 13 && $t <= 26 ) {
                        $s = $t - 13;
                        //$deck["cards"][$t]["value"] = $s;
                        //$deck["cards"][$t]["suit"] = "diamonds";
                        $deck["cards"][$t]["img"] = "src='img/$s.png'";
                    }
                    else if($t > 26 && $t <= 39 ) {
                        $s = $t - 26;
                        //$deck["cards"][$t]["value"] = $s;
                        //$deck["cards"][$t]["suit"] = "hearts";
                        $deck["cards"][$t]["img"] = "src='img/$s.png'";
                    }
                    else if($t > 39 && $t <= 52 ) {
                        $s = $t - 39;
                        //$deck["cards"][$t]["value"] = $s;
                        //$deck["cards"][$t]["suit"] = "spades";
                        $deck["cards"][$t]["img"] = "src='img/$s.png'";
                    }
                }
                foreach($deck as $result){
                        echo "$result['img']";
                }
                //echo $results['deck'][1]['img'];
                /*function printall($deck) {
                    //foreach($deck['cards'] as $result) {
                    //    echo $result['value'], " ", $result['suit'], $result['img'], '<br>';
                    //}
                    
                    foreach($results['cards'] as $result) { 
                        echo $result['img'], '<br>';
                    }
                }*/
            ?>
            
        </div>
    </body>
</html>