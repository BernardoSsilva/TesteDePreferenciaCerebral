<?php
    include 'variaveis.php';

    if(($C > $A)&&($C > $I)&&($C > $O)){
        ECHO "<p>GATO";
    }else if(($A > $C)&&($A > $I)&&($A > $O)){
        ECHO "<p>TUBARÃO";
    }else if(($O > $A)&&($O > $I)&&($O > $C)){
        ECHO "<p>LOBO";
    }else if(($I > $A)&&($C < $I)&&($I > $O)){
        ECHO "<p>AGUIA";
    } else {
        echo"empate";
    }

?>