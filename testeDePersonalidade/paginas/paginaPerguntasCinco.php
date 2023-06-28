
<?php

    include 'variaveis.php';

    session_start();
    $A = $_SESSION['A'];
    $I = $_SESSION['I'];
    $O = $_SESSION['O'];
    $C = $_SESSION['C'];

    $pergunta1 = $_POST['pergunta21'];
    $pergunta2 = $_POST['pergunta22'];
    $pergunta3 = $_POST['pergunta23'];
    $pergunta4 = $_POST['pergunta24'];
    $pergunta5 = $_POST['pergunta25'];
    

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

    header('Location: resultado.php');
?>