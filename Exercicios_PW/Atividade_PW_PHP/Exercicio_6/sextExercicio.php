<?php
$num1 = $_POST["primeiroNum"];
$num2 = $_POST["segundoNum"];
$num3 = $_POST["terceiroNum"];


if ($num1 > $num2 && $num1 > $num3) {
    echo "O $num1 é o maior!" ;
} else if ($num2 > $num1 && $num2 > $num3) {
    echo "O $num2 é o maior!";
} else {
    echo"O $num3 é o maior!";
}
?>