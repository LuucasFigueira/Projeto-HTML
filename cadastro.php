<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirma = $_POST['confSenha'];
    if ($senha == $confirma) {
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
        // INSERT no banco aqui

        header("Location: index.php"); /* caso tudo de certo, volta para pagina inicial*/ 
        exit;

    }else {
        echo "Senhas não coincidem!";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="stylesheet" href="projetoCss.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aleh Bolos e Doces | Cadastro</title>
</head>
<body>
    <form method="POST" target="_self" onsubmit=" return validarCadastro()">
        <div class="cadastro">
            <h2>Cadastro</h2>
            <p>Digite seu e-mail</p>
            <input type="email" id="email" name="email" placeholder="exemplo@gmail.com">
            <p>Crie uma senha</p>
            <input type="password" id="senha" name="password" placeholder="senha">
            <p>Confirme a senha</p>
            <input type="password" id="confsenha" name="confsenha" placeholder="senha">
            <button type="submit">Confirmar</button>
        </div>
    </form>
<script src="script.js"></script>    
</body>
</html>