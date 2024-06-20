<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    echo "<h2>Dados recebidos via POST:</h2>";
    echo "Nome: " . $nome . "<br>";
    echo "Email: " . $email . "<br>";
}