<?php
$primeiraNota = $_POST["primeraNota"];
$segundaNota = $_POST["segundaNota"];

$media = ($primeiraNota + $segundaNota) / 2;

if ($media == 10) {
    echo "Você foi Aprovado! Parabéns!";
} else if ($media >= 7) {
    echo "Aprovado, parabéns!";
} else {
    echo "Reprovado.";
}
?>