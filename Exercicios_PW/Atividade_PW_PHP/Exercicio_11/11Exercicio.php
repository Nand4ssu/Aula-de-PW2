<?php
$salario = $_POST["salario"];

echo "Seu salário atual é: R$ $salario<br><br><hr>";

$aumento = 0;

if ($salario <= 280.00) {
    $aumento = $salario * 0.20;
    echo "O aumento aplicado é de 20%<br>";
} else if ($salario > 280.00 && $salario <= 700.00) {
    $aumento = $salario * 0.15;
    echo "O aumento aplicado é de 15%<br>";
} else if ($salario > 700.00 && $salario <= 1500.00) {
    $aumento = $salario * 0.10;
    echo "O aumento aplicado é de 10%<br>";
} else {
    $aumento = $salario * 0.05;
    echo "O aumento aplicado é de 5%<br>";
}

$salarionv = $salario + $aumento;

echo "O valor do seu aumento é de : R$ $aumento<br>";
echo "Seu salário após aumento é de: R$ $novoSalario";
?>