<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="style.css"> <!-- Link CSS, importando para funcionar -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aleh Bolos e Doces | Encomenda</title>
</head>

<body>

    <?php include "cabecalho.php"; ?>

    <div class="encomenda">
        <h1>Encomenda</h1>
        <form id="formEncomenda" action="processarEncomenda.php" method="POST" enctype="multipart/form-data">

            <label for="nome">Nome: *</label>
            <input type="text" id="nome" name="nome" required>
            <br>

            <label for="telefone">Telefone: *</label>
            <input type="text" id="telefone" name="telefone" required>
            <br>

            <label for="produto">Produto: *</label>
            <input type="text" id="produto" name="produto" required>
            <br>

            <label for="quantidade">Quantidade: *</label>
            <input type="number" id="quantidade" name="quantidade" required>
            <br>

            <label for="data">Data desejada: *</label>
            <input type="date" id="data" name="data" required>
            <br>

            <label for="observacao">Observação: - Opcional</label>
            <textarea id="observacao" name="observacao" placeholder="Alguma observação..."></textarea>
            <br>

            <p id="mensagemSenha"></p>
            <button type="submit">Enviar pedido</button>
        </form>
    </div>

    <script src="script.js"></script> <!-- Link JS, importando para funcionar -->

</body>

</html>