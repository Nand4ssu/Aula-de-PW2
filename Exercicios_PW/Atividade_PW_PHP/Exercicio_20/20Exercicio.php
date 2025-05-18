<?php
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];

$media = ($nota1 + $nota2 + $nota3) / 3;

if ($media == 10) {
    echo "Aprovado!! Sua nota foi $media";
} elseif ($media >= 7) {
    echo "Aprovado!! Sua nota foi $media";
} else {
    echo "Reprovado. Sua nota foi $media";
}
?>