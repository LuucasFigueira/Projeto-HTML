<?php

session_start();
require_once "conexao.php";

if (!isset($_SESSION['usuario_id'])) {
    header("Location:index.php");
    exit;
}

$id = $_POST['id'];
$produto = $_POST['produto'];
$quantidade = $_POST['quantidade'];
$usuario_id = $_SESSION['usuario_id'];

//velor fixo
$valor = 20 * $quantidade;
$sql = "UPDATE pedidos 
SET produto = ?, quantidade = ?, valor = ?
WHERE id = ? AND usuario_id = ?";
$stmt = $conn->prepare($sql);

$stmt->bind_param(
    "sidii",
    $produto,
    $quantidade,
    $valor,
    $id,
    $usuario_id
);


if ($stmt->execute()) {
    header("Location: meusPedidos.php");
    exit;
} else {
    echo "Erro ao atualizar pedido";
}

?>