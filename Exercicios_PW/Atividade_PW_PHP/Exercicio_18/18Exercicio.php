<?php
 
    $dd = $_POST["dia"];
    $mm = $_POST["mes"];
    $ano = $_POST["ano"];

    if ($dd > 1 && $dd < 31 && $mm >= 1 && $mm <= 12 && $ano > 1) {
        echo "A data é válida.";
    } else {
        echo "A data é inválida.";
    }

?>