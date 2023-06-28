<?php
    include 'variaveis.php';
    session_start();
    $A = $_SESSION['A'];
    $I = $_SESSION['I'];
    $O = $_SESSION['O'];
    $C = $_SESSION['C'];
    
    if(($C > $A)&&($C > $I)&&($C > $O)){
        ECHO "<p>GATO";
    }else if(($A > $C)&&($A > $I)&&($A > $O)){
        ECHO "<p>TUBARÃO";
    }else if(($O > $A)&&($O > $I)&&($O > $C)){
        ECHO "<p>LOBO";
    }else if(($I > $A)&&($C < $I)&&($I > $O)){
        ECHO "<p>AGUIA";
    } else {
        echo"empate ".$C." ".$A." ".$O." ".$I ;
    }

?>