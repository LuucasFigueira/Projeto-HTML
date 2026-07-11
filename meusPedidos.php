<?php

session_start();
require_once "conexao.php";

if (!isset($_SESSION['usuario_id'])) {
    header("Location: index.php");
    exit;
}


$usuario_id = $_SESSION['usuario_id'];
$sql = "SELECT * FROM pedidos WHERE usuario_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $usuario_id);
$stmt->execute();
$result = $stmt->get_result();

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="stylesheet" href="projetoCss.css">
    <meta charset="UTF-8">
    <title>Meus Pedidos</title>
</head>
<body>
<div class="pedido">
    <h1>Meus Pedidos 🍰</h1>
    <?php

    if ($result->num_rows > 0) {
        while ($pedido = $result->fetch_assoc()) {
    ?>

    <div class="pedido">
        <h3><?= $pedido['produto']; ?></h3>
        <p>
            Quantidade:
            <?= $pedido['quantidade']; ?>
        </p>
        <p>
            Valor:
            R$ <?= number_format($pedido['valor'], 2, ',', '.'); ?>
        </p>
        <p>
            Data:
            <?= $pedido['data_pedido']; ?>
        </p>
        <a href="editarPedido.php?id=<?= $pedido['id']; ?>">
        <button>Editar pedido</button></a>

        <a href="excluirPedido.php?id=<?= $pedido['id']; ?>">
        <button>Excluir pedido</button>
        </a>
    </div>

    <?php
        }
    } else {
        echo "<h2>Você ainda não possui pedidos.</h2>";
    }

    ?>
    <br>
    <a href="index.php">
        Voltar para início
    </a>
</div>
</body>
</html>