<?php
session_start();
require_once "conexao.php";

if (!isset($_SESSION['usuario_id'])) {
    header("Location: index.php");
    exit;
}

$id = $_GET['id'];
$usuario_id = $_SESSION['usuario_id'];
$sql = "DELETE FROM pedidos 
WHERE id = ? 
AND usuario_id = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ii", $id, $usuario_id);

if ($stmt->execute()) {
    header("Location: meusPedidos.php");
} else {
    echo "Erro ao excluir pedido";
}

?>