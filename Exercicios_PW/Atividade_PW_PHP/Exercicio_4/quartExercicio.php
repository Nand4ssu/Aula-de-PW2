<?php 

    $letra = $_POST["letra"];
    
    if ($letra == "a" || $letra ==  "e" ||$letra ==  "i" ||$letra == "o" || $letra =="u") {
        echo "A $letra é uma vogal!";
    } else {
        echo "A $letra é uma consoante!";
    }
?>