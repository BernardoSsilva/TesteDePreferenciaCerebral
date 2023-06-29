
<?php

    include 'variaveis.php';

    session_start();
    $pergunta1 = $_POST['pergunta1'];
    $pergunta2 = $_POST['pergunta2'];
    $pergunta3 = $_POST['pergunta3'];
    $pergunta4 = $_POST['pergunta4'];
    $pergunta5 = $_POST['pergunta5'];

    $A=0;
    $I=0; 
    $O=0; 
    $C=0;
    
    switch ($pergunta1){
        case "I":
            $I += 1;
            break;
        case "A": 
            $A += 1;
            break;
        case "O":
            $O += 1;
            break;
        case "C":
            $C += 1;
            break;
    }
    
    switch ($pergunta2){
        case "I":
            $I += 1;
            break;
        case "A": 
            $A += 1;
            break;
        case "O":
            $O += 1;
            break;
        case "C":
            $C += 1;
            break;
    }
    
    switch ($pergunta3){
        case "I":
            $I += 1;
            break;
        case "A": 
            $A += 1;
            break;
        case "O":
            $O += 1;
            break;
        case "C":
            $C += 1;
            break;
    }
    
    switch ($pergunta4){
        case "I":
            $I += 1;
            break;
        case "A": 
            $A += 1;
            break;
        case "O":
            $O += 1;
            break;
        case "C":
            $C += 1;
            break;
    }
    
    switch ($pergunta5){
        case "I":
            $I += 1;
            break;
        case "A": 
            $A += 1;
            break;
        case "O":
            $O += 1;
            break;
        case "C":
            $C += 1;
            break;
    }

    $_SESSION['A'] = $A;
    $_SESSION['I'] = $I;
    $_SESSION['O'] = $O;
    $_SESSION['C'] = $C;
    header('Location: paginaPerguntasDois.html');
?>