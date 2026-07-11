<?php
session_start();

if (!isset($_SESSION['usuario_id'])) {
    header("Location: index.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="stylesheet" href="projetoCss.css">
    <title>Pedido</title>
</head>
<body>

<div class="pedido">
    <h1>Fazer Pedido</h1>
    <p>Usuário: <?= $_SESSION['usuario_nome']; ?> </p>


    <form action="salvarPedido.php" method="POST">

    <label>Produto:</label>
    
    <select name="produto">
    <option value="Fatia Brigadeiro e Maracujá">Fatia Brigadeiro e Maracujá</option>
    <option value="Torta BomBom de Morango">Torta BomBom de Morango</option>
    <option value="Fatia Ninho com Geleia">Fatia Ninho com Geleia</option>
    <option value="Torta BomBom de Uva">Torta BomBom de Uva</option>

    </select>
    <br><br>
    <label>Quantidade:</label>

    <input type="number" value="1" name="quantidade" min="1">
    <br>

    <p>VALOR: R$ 20,00</p>
    <br><br>

    <button type="submit">
    Enviar pedido
    </button>

    </form>
</div>
</body>
</html>