<?php
$primNumero = $_POST["primNumero"];
$segunNumero = $_POST["segunNumero"];
$tercNumero = $_POST["tercNumero"];


if ($primNumero > $segunNumero && $primNumero > $tercNumero) {
    $maior = $primNumero;
} else if ($segunNumero > $primNumero && $segunNumero > $tercNumero) {
    $maior = $segunNumero;
} else {
  $tercNumero;
}

if ($primNumero < $segunNumero && $primNumero < $tercNumero) {
    $menor = $primNumero;
} else if ($num2 < $num1 && $num2 < $num3) {
    $menor = $segunNumero;
} else {
    $menor = $tercNumero;
}

echo "O número menor é $menor, já o maior é o $maior";
?>