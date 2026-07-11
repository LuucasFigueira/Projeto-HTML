<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "alehbolosedoces";

$conn = new mysqli($host, $usuario, $senha, $banco);

if ($conn->connect_error) {
    header("Location: index.php");
    exit;
}