<?php 

if (isset($_POST["data"])) 
    { 
        $usrdata = $_POST["data"];
        $myArray = explode(',', $usrdata);
        firstDuplicate($myArray);
    }


    function firstDuplicate($a) {
        $arr_length = count($a); 
        $dublicates_index=array();

        
        foreach ($a as $i => $data) {
            
             foreach ($a as $o => $data_0) {
                 
                 if($data==$data_0 && $i != $o && $o>$i) {
                     
                      array_push($dublicates_index,$o);
                    
                      
                 
                  }elseif($arr_length-1 == $i && !$dublicates_index){
                        
                    
                        echo ("-1");
                        exit;
                        
                 
             }
             
         }
    
    
        }
        
        sort($dublicates_index);
        echo $a[$dublicates_index[0]];

    }






?>