<?php
session_start();
require_once "conexao.php";

if (!isset($_SESSION['usuario_id'])) {
    header("Location: index.php");
    exit;
}


$id = $_GET['id'];
$usuario_id = $_SESSION['usuario_id'];

// Buscar pedido
$sql = "SELECT * FROM pedidos WHERE id = ? AND usuario_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ii", $id, $usuario_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 0) {
    echo "Pedido não encontrado";
    exit;
}
$pedido = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Editar Pedido</title>
    <link rel="stylesheet" href="projetoCss.css">
</head>
<body>
<div class="pedido">
    <h1>Editar Pedido 🍰</h1>

    <form action="atualizarPedido.php" method="POST">
    <input type="hidden" name="id" value="<?= $pedido['id']; ?>">
    
    <label>Produto:</label>
    <select name="produto">
    <option <?= $pedido['produto']=="Fatia Brigadeiro e Maracujá" ? "selected":"" ?>>
    Fatia Brigadeiro e Maracujá</option>
    <option <?= $pedido['produto']=="Torta BomBom de Morango" ? "selected":"" ?>>
    Torta BomBom de Morango</option>
    <option <?= $pedido['produto']=="Fatia Ninho com Geleia" ? "selected":"" ?>>
    Fatia Ninho com Geleia</option>
    <option <?= $pedido['produto']=="Torta BomBom de Uva" ? "selected":"" ?>>
    Torta BomBom de Uva</option>

    </select>
    <br><br>

    <label>Quantidade:</label>
    <input type="number" name="quantidade" value="<?= $pedido['quantidade']; ?>" min="1">
    <br><br>
    <button type="submit">Salvar alteração</button>

    </form>
</div>
</body>
</html>