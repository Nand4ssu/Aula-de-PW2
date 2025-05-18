<?php
$letra = $_POST["letra"];

if ($letra == "M") {
    echo "Bom dia! Você é um estudante matutino!";
} else if ($letra == "V") {
    echo "Boa tarde! Você é um estudante vespertino!";
} else if ($letra == "N") {
    echo "Boa noite! Você é um estudante noturno!";
} else {
    echo "Turno inválido!";
}
?>