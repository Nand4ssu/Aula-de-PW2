<?php
    $genero = $_POST["genero"];

    if ($genero == "F") {
        echo "Seu sexo é Feminino!";
    }else if($genero == "M"){
        echo "Seu sexo é Masculino!";
    }else{
        echo "Sexo inválido! Por favor digite uma das opções!";
    }
?>