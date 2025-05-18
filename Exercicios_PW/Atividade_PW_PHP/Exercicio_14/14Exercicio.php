<?php

$primeiraN = $_POST["primeiraN"];
$segundaN = $_POST["segundaN"];

$media = ($primeiraN + $segundaN) / 2;

echo"A nota obtida no primeiro bimestre foi: $primeiraN<br>";
echo "A segunda nota obtida no segundo bimestre: $segundaN<br>";
echo "Sua média é: $media<br>";

if ($media >= 0.0 && $media <= 4.0) {
    echo "E - REPROVADO";
} else if ($media > 4.0 && $media <= 6.0) {
    echo "D - REPROVADO";
} else if ($media > 6.0 && $media <= 7.5) {
    echo "C - APROVADO";
} else if ($media > 7.5 && $media <= 9.0) {
    echo "B - APROVADO";
} else if ($media > 9.0 && $media <= 10.0) {
    echo "A - APROVADO COM DISTINÇÃO";
} else {
    echo "Valor inválido.";
}
?>