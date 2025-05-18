<?php
$num = $_POST["num"];


if ($num == 1) {
    echo "$num - Domingo!";
} else if ($num == 2) {
    echo "$num - Segunda-feira!";
} else if ($num == 3) {
    echo "$num - Terça-feira!";
} else if ($num == 4) {
    echo "$num - Quarta-feira!";
} else if ($num == 5) {
    echo "$num - Quinta-feira!";
} else if ($num == 6) {
    echo "$num - Sexta-feira!";
} else if ($num == 7) {
    echo "$num - Sábado!";
} else {
    echo "Escolha inválida.";
}

?>