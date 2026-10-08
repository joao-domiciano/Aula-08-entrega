<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $codigo = $_POST['codigo'];
    $destinatario = $_POST['destinatario'];
    $cidade = $_POST['cidade'];
    $peso = $_POST['peso'];
} else {
$codigo = $_POST['codigo'];
    $destinatario = $_POST['destinatario'];
    $cidade = $_POST['cidade'];
    $peso = $_POST['peso'];
}

echo "O código recebido é: " . $codigo;
echo "<br>";
echo "Voce é o: " . $destinatario;
echo "<br>";
echo "A cidade é: " . $cidade;
echo "<br>";
echo "O peso é: " . $peso . " Kg";
echo "<br>";

?>