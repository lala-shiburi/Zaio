<?php 

if (isset($_POST["data"])) 
    { 
        $usrdata = $_POST["data"];
        
        isPrime($usrdata);
    }

function isPrime($a) {

    if (strlen($a)>4) {
        
        echo "Please Enter a number that has less that 4 digits";
    }
    else if(!is_numeric($a)){
        echo  "Only Numbers maybe entered";
    }
    else{
        if($a <= 1){
            echo "False";
            exit;
        }
        elseif ($a <= 3) {
            echo "True";
            exit;
        }
        elseif ($a % 2 == 0 || $a % 3 == 0) {
            echo "False";
            exit;
        }
        $i=5;
        while ($i*$i <= $a) {
            if ($a%$i == 0 || $a%($i+2) == 0) {
                echo "False";
                exit;
            }
            else {
                $i+=6;
            }
        }
        echo "True";
    }
}

    

    ?>