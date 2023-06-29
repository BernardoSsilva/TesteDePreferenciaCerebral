<?php
    include 'variaveis.php';

    if(($C > $A)&&($C > $I)&&($C > $O)){
        ECHO "GATO";
    }else if(($A > $C)&&($A > $I)&&($A > $O)){
        ECHO "TUBARÃO";
    }else if(($O > $A)&&($O > $I)&&($O > $C)){
        ECHO "LOBO";
    }else if(($I > $A)&&($C < $I)&&($I > $O)){
        ECHO "AGUIA";
    }
    
?>