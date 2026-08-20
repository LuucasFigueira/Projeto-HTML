<?php
require_once "conexao.php"; /* Conexão com o banco de dados, pagina só funciona se conectar */

if (session_status() == PHP_SESSION_NONE) { /* Verifica se a sessão já foi iniciada, se não, inicia a sessão */
    session_start(); /* Inicia a sessão */
}

$logado = false;
$nomeUsuario = "";

if (isset($_SESSION['nome'])) { /* Verifica se o usuário está logado */
    $logado = true;
    $nomeUsuario = $_SESSION['nome'];
}

?>

<!-- Logo da empresa -->
<div class="logo"></div>

<!-- login -->
<?php if ($logado) : ?>
    <div class="login">
        <button id="bntLogin" onclick="abrirModal()">
            <img src="img-icones/brigadeiro-icone-menu.png" alt="Menu">
        </button>
    </div>

    <div class="modal" id="modal">
        <div class="modalTela">

            <button class="close" id="fecharModal" onclick="fecharModal()">&times;</button>

            <h2>Olá, Bem-vindo<br><?php echo $nomeUsuario; ?></h2>
            <form action="logout.php" method="POST">

                <button type="submit">Sair</button>
                <br>
            </form>
        </div>
    </div>
<?php else : ?>
    <div class="login">
        <button id="bntLogin" onclick="abrirModal()">
            <img src="img-icones/brigadeiro-icone-menu2.png" alt="Menu">
            <p>Login</p>
        </button>
    </div>

    <div class="modal" id="modal">
        <div class="modalTela">

            <button class="close" id="fecharModal" onclick="fecharModal()">&times;</button>

            <h2>Login</h2>
            <form action="login.php" method="POST">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <br><br>

                <label for="senhaC">Senha:</label>
                <input type="password" id="senhaC" name="senhaC" required>
                <br><br>

                <button type="submit">Entrar</button>
                <br>

                <p>Não tem uma conta? <a href="cadastro.php">Cadastre-se</a></p>
            </form>
        </div>
    </div>
<?php endif; ?>

<!-- Menu de navegação -->
<div class="menu">
    <header> <!-- É usado para representar o cabeçalho de uma página ou de uma seção. -->

        <nav> <!-- <nav> </nav> É usado para agrupar os links de navegação  -->

            <ul> <!-- <ul> </ul> É usado para criar uma lista não ordenada de links de navegação e <li> </li> é obrigatório para lista -->
                <li><a href="index.php">Início</a></li>
                <li><a href="encomenda.php">Encomendar</a></li>
                <li><a href="contato.php">Contato</a></li>
            </ul>

        </nav>

    </header>

</div>