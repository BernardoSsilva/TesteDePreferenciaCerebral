
<?php

    include 'variaveis.php';

    $pergunta1 = $_POST['pergunta1'];
    $pergunta2 = $_POST['pergunta2'];
    $pergunta3 = $_POST['pergunta3'];
    $pergunta4 = $_POST['pergunta4'];
    $pergunta5 = $_POST['pergunta5'];
    

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

    header('Location: paginaPerguntasDois.html');
?>