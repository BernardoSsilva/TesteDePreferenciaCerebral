
<?php

    include 'variaveis.php';

    session_start();
    $A = $_SESSION['A'];
    $I = $_SESSION['I'];
    $O = $_SESSION['O'];
    $C = $_SESSION['C'];

    $pergunta1 = $_POST['pergunta11'];
    $pergunta2 = $_POST['pergunta12'];
    $pergunta3 = $_POST['pergunta13'];
    $pergunta4 = $_POST['pergunta14'];
    $pergunta5 = $_POST['pergunta15'];
    

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

    header('Location: paginaPerguntasQuatro.html');
?>