<?php 

if (isset($_POST["data"])) 
    { 
        $usrdata = $_POST["data"];
        $myArray = explode(',', $usrdata);
        containsDuplicates($myArray);
    }

function containsDuplicates($a) {
        $arr_length = count($a); 
        $dublicates="";
        
        foreach ($a as $i => $data) {
            
             foreach ($a as $o => $data_0) {
                 echo "$i :$data.first<br>";
                 echo "$o :$data_0<br>";
                 
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