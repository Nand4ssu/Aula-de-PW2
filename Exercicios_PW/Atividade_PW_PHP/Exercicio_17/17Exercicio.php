<?php
    $ano = $_POST["ano"];

    if ($ano % 4 === 0){
        echo"O ano é bissexto.";
       }else{
           echo"O ano não é bissexto.";
        }

?>