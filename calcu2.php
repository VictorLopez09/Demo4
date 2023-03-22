<?php
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $opc = $_GET['operacion'];


    if($num1 == NULL && $num2 == NULL){
        if($opc == 'suma'){
            $num3 = $num1 + $num2;
    
        }
        else if($opc == 'resta'){
            $num3 = $num1 - $num2;
            
        }
        else{
            $num3 = 0;
        }
        echo '<p> El resultado es: '.$num3.'</p>';    
    }
    else{
        header("location: index.php");
    }

    
?>