
<?php

    include 'variaveis.php';

    $pergunta1 = $_POST['pergunta6'];
    $pergunta2 = $_POST['pergunta7'];
    $pergunta3 = $_POST['pergunta8'];
    $pergunta4 = $_POST['pergunta9'];
    $pergunta5 = $_POST['pergunta10'];
    

    switch ($pergunta1){
        case "I":
            $I++;
            break;
        case "A": 
            $A++;
            break;
        case "O":
            $O++;
            break;
        case "C":
            $C++;
            break;
    }

    switch ($pergunta2){
        case "I":
            $I++;
            
            break;
        case "A": 
            $A++;
            break;
        case "O":
            $O++;
            break;
        case "C":
            $C++;
            break;
    }

    switch ($pergunta3){
        case "I":
            $I++;
            
            break;
        case "A": 
            $A++;
            break;
        case "O":
            $O++;
            break;
        case "C":
            $C++;
            break;
    }

    switch ($pergunta4){
        case "I":
            $I++;
            
            break;
        case "A": 
            $A++;
            break;
        case "O":
            $O++;
            break;
        case "C":
            $C++;
            break;
    }

    switch ($pergunta5){
        case "I":
            $I++;
            
            break;
        case "A": 
            $A++;
            break;
        case "O":
            $O++;
            break;
        case "C":
            $C++;
            break;
    }

    header('Location: resultado.php');
?>