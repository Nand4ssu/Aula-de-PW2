<?php 
    $primeiroValor = $_POST["primeiroNumero"];
    $segundoValor = $_POST["segundoNumero"];

    if ($primeiroValor > $segundoValor){
        echo "$primeiroValor é maior!!";
    }else if($segundoValor > $primeiroValor){
        echo "$segundoValor é maior!";
    }
?>