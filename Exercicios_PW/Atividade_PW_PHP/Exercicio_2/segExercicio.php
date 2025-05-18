<?php
    $numero = $_POST["numero"];

    if ($numero < 1) {
        echo"O número informado é negativo!";
    } else if ($numero >= 0){
        echo "O número informado é positivo!";
    } 
?>