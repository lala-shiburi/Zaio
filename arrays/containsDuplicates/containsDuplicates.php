<?php 

if (isset($_POST["data"])) 
    { 
        $usrdata = $_POST["data"];
        $myArray = explode(',', $usrdata);
        containsDuplicates($myArray);
    }

function containsDuplicates($a) {
        $arr_length = count($a); 
        
        
        foreach ($a as $i => $data) {
            
             foreach ($a as $o => $data_0) {
                
                                  
                 if($data==$data_0 && $i != $o) {
                     
                      echo ("True");
                      exit;
                 
                  }elseif($arr_length-1 == $i){
                        
         
                        echo ("False");
                         exit;
                 
             }
             
         }
    
    
        }

    }

    ?>