<?php
    $nome = $_POST["nome"];
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];
    $nota3 = $_POST["nota3"];
    $nota4 = $_POST["nota4"];

    $mediaAluno = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

    if($mediaAluno >= 9){
        echo "Olá $nome!! Sua média é: MB. <br> Bom trabalho!!";
    
       }else if ($mediaAluno >= 7 && $mediaAluno <= 8){
        echo "Olá $nome!! Sua média é: B. <br> Bom trabalho!";
    
       }else if( $mediaAluno >= 5 && $mediaAluno < 7){
        echo "OLá $nome!! Sua média é: R. <br> Você pode melhorar!";
       }else if($mediaAluno >= 0 && $mediaAluno < 5){
        echo "Olá $nome!! Sua média é: I. <br>Tem que melhorar..";
       }else{
        echo "Média inválida";
       }
       
    
?>