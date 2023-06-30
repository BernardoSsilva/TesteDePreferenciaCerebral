<?php
    include 'variaveis.php';
    session_start();
    $A = $_SESSION['A'];
    $I = $_SESSION['I'];
    $O = $_SESSION['O'];
    $C = $_SESSION['C'];
    
    if(($C > $A)&&($C > $I)&&($C > $O)){
        header('Location: gato.html');
    }else if(($A > $C)&&($A > $I)&&($A > $O)){
        header('Location: tubarao.html');
    }else if(($O > $A)&&($O > $I)&&($O > $C)){
        header('Location: lobo.html');
    }else if(($I > $A)&&($C < $I)&&($I > $O)){
        header('Location: aguia.html');
    }

?>