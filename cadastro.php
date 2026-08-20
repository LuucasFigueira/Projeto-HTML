<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="style.css"> <!-- Link CSS, importando para funcionar -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aleh Bolos e Doces | Cadastro</title>
</head>

<body>

    <?php include "cabecalho.php"; ?>

    <div class="cadastro">
        <h1>Cadastro de Usuário</h1>
        <form id="formCadastro" action="cadastroUsuario.php" method="POST">

            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
            <br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br><br>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>
            <br><br>

            <label for="confSenha">Confirmar Senha:</label>
            <input type="password" id="confSenha" name="confSenha" required>
            <br>

            <p id="mensagemSenha"></p>
            <button type="submit">Cadastrar</button>
        </form>
    </div>

    <script src="script.js"></script> <!-- Link JS, importando para funcionar -->

</body>

</html>