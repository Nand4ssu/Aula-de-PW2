<?php
$preco1 = $_POST["produto1"];
$preco2 = $_POST["produto2"];
$preco3 = $_POST["produto3"];


if ($preco1 < $preco2 && $preco1 < $preco3) {
     echo"O produto 1 que custa: R$ $preco1 é a melhor opção para economizar!";
} else if ($preco2 < $preco1 && $preco2 < $preco3) {
     echo"O produto 2 que custa: R$ $preco2 é a melhor opção para economizar!";
} else {
    echo"O produto 3 que custa: R$ $preco3 é a melhor opção para economizar!";
}

?>