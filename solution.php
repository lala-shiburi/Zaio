<?php 

if (isset($_POST["data"])) 
    { 
        $usrdata = $_POST["data"];
        $myArray = explode(',', $usrdata);
        firstDuplicate($myArray);
    }


    function firstDuplicate($a) {
        $arr_length = count($a); 
        $dublicates=array();

        
        foreach ($a as $i => $data) {
            
             foreach ($a as $o => $data_0) {
                 //echo "$i :$data.first<br>";
                 //echo "$o :$data_0<br>";
                 
                 if($data==$data_0 && $i != $o && $o>$i) {
                     
                      //echo ("True");
                      
                      //echo "<br>Dub ".$dublicates;
                      array_push($dublicates,$o);
                    
                      
                 
                  }elseif($arr_length-1 == $i && !$dublicates){
                        
                    
                        echo ("-1");
                        exit;
                        
                 
             }
             
         }
    
    
        }
        //echo $dublicates."last";
        sort($dublicates);
        //print_r($dublicates);
        echo $a[$dublicates[0]];

    }




    function Duplicate($a) {
        $arr_length = count($a); 
        $dublicates="";
        
        foreach ($a as $i => $data) {
            
             foreach ($a as $o => $data_0) {
                 echo "$i :$data.first<br>";
                 echo "$o :$data_0<br>";
                 
                 if($data==$data_0 && $i != $o) {
                     
                      echo ("True");
                      //$dublicates.=$data;
                    
                      exit;
                 
                  }elseif($arr_length-1 == $i){
                        
         
                        echo ("False");
                         exit;
                 
             }
             
         }
    
    
        }

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