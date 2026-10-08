<?php

$codigo = $_GET['codigo'];

$destinatario = $_GET['destinatario'];

$cidade = $_GET['cidade'];

$peso = $_GET['peso'];

echo "O código recebido é: " . $codigo;

echo "<br>";

echo "Voce é o: " . $destinatario;

echo "<br>";

echo "A cidade é: " . $cidade;

echo "<br>";

echo "O peso é: " . $peso . " Kg";

echo "<br>";
?>