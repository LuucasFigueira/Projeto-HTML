<?php

require_once "conexao.php"; /* Conexão com o banco de dados, pagina só funciona se conectar */
session_start(); /* Inicia a sessão */

$logado = false;
$nomeUsuario = "";

if (isset($_SESSION['usuario'])) { /* Verifica se o usuário está logado */
    $logado = true;
    $nomeUsuario = $_SESSION['usuario'];
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>

    <link rel="stylesheet" href="style.css"> <!-- Link CSS, importando para funcionar -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aleh Bolos e Doces | Início</title>

</head>
<body>

    <!-- Logo da empresa -->
    <div class="logo"></div>

    <!-- login -->
    <div class="login">
        <button id="bntLogin" onclick="abrirModal()">Login</button>
    </div>

    <div class="modal" id="modal">
        <div class="modalTela">

            <button class="close" id="fecharModal" onclick="fecharModal()">&times;</button>

            <h2>Login</h2>
            <form action="login.php" method="POST">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <br><br>

                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required>
                <br><br>

                <button type="submit">Entrar</button>
                <br>

                <p>Não tem uma conta? <a href="cadastro.php">Cadastre
            </form>
        </div>
    </div>

    <!-- Menu de navegação -->
    <div class="menu">
        <header> <!-- É usado para representar o cabeçalho de uma página ou de uma seção. -->

            <nav> <!-- <nav> </nav> É usado para agrupar os links de navegação  -->

                <ul> <!-- <ul> </ul> É usado para criar uma lista não ordenada de links de navegação e <li> </li> é obrigatório para lista -->
                    <li><a href="index.php">Início</a></li>
                    <li><a href="encomendas.php">Encomendar</a></li>
                    <li><a href="contato.php">Contato</a></li>
                </ul>

            </nav>

        </header>
    </div>

<script src="script.js"></script> <!-- Link JS, importando para funcionar -->

</body>
</html>