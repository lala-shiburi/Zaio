<?php 

if (isset($_POST["data"])) 
    { 
        $usrdata = $_POST["data"];
        $myArray = str_split($usrdata);
        reverseStringNoVowels($myArray);
    }

function reverseStringNoVowels($a) {
        $vowel_index=array();
        foreach ($a as $key => $value) {
            if ($value=="a"||$value=="e" || $value=="i" ||$value=="o" || $value=="u" ) {
                # code..
                
                array_push($vowel_index,$key);
            }
        }
        $reversed = array_reverse($a);
        
        foreach ($vowel_index as $key => $value) {
            unset($reversed[$value]);
        }
        
        echo implode("",$reversed);
    
        }

    

    ?>