<?php

$num = $_POST['num'];
$arredondando = round($num);
//O round arredonda o número enviado pelo usuário para o inteiro mais próximo.
// Se o número for decimal (ex: 4.6), será arredondado para 5.
// Se já for inteiro (ex: 7), permanece o mesmo.
if ($num == $arredondando) {
    echo "O número é inteiro.";
} else {
    echo "O número é decimal.";
}
?>