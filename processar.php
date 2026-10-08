<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $codigo = $_POST['codigo'];
    $destinatario = $_POST['destinatario'];
    $cidade = $_POST['cidade'];
    $peso = $_POST['peso'];
} else {
    $codigo = $_GET['codigo'];
    $destinatario = $_GET['destinatario'];
    $cidade = $_GET['cidade'];
    $peso = $_GET['peso'];
}

echo "Voce é o: " . $destinatario;
echo "<br>";
echo "A cidade é: " . $cidade;
echo "<br>";
echo "O peso é: " . $peso . " Kg";
echo "<br>";
?>