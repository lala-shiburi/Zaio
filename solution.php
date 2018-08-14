<?php 

if (isset($_POST["data"])) 
    { 
        $usrdata = $_POST["data"];
        $myArray = explode(',', $usrdata);
        containsDuplicates($myArray);
    }


function containsDuplicates($a) {
    $arr_length = count($a); 
    $k=0;
    $j=0;
    
    foreach ($a as $data) {
        
         foreach ($a as $data_0) {
             
             if($data==$data_0 && $k!=$j) {
                 
                 echo ("True");
                
                 exit;
             
             }elseif($arr_length-1 == $j){
                    
     
                     echo ("False");
                     exit;
            }else{
            $k++;
            }
             
         }
         $j++;
         $k=0;
     }

     
    }


?>