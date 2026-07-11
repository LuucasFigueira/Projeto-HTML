<?php

session_start();
require_once "conexao.php";

$usuario_id = $_SESSION['usuario_id'];
$produto = $_POST['produto'];
$quantidade = $_POST['quantidade'];
$valor = 20.00; // Valor fixo do produto


$sql = "INSERT INTO pedidos 
(usuario_id, produto, quantidade, valor)
VALUES (?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param(
    "isid",
    $usuario_id,
    $produto,
    $quantidade,
    $valor
);

if ($stmt->execute()) {
    header("Location: meusPedidos.php");
    exit;
} else {
    echo "Erro ao cadastrar pedido";
}

?>