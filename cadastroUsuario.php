<?php

require_once "conexao.php";

/* Recebe os dados enviados pelo formulário */
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$confSenha = $_POST['confSenha'];


/* Verifica se as senhas são iguais */
if ($senha !== $confSenha) {
    header("Location: cadastro.php");
    exit;
}


/* Verifica se o email já está cadastrado */
$sql = "SELECT id FROM cliente WHERE email = ?";

$stmt = $conexao->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();

$resultado = $stmt->get_result();


if ($resultado->num_rows > 0) {

    header("Location: cadastro.php");
    exit;
}


/* Criptografa a senha */
$senhaHash = password_hash($senha, PASSWORD_DEFAULT);


/* Insere o novo usuário no banco */
$sql = "INSERT INTO cliente (nome, email, senha) VALUES (?, ?, ?)";

$stmt = $conexao->prepare($sql);
$stmt->bind_param("sss", $nome, $email, $senhaHash);


/* Executa o cadastro */
if (!$stmt->execute()) {
    die("Erro ao cadastrar: " . $stmt->error);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css"> <!-- Link CSS, importando para funcionar -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aleh Bolos e Doces | Cadastro Completo</title>
</head>

<body>

    <div class="logo">
    </div>

    <div class="cadastroCompleto">
        <img src="img-icones/sim.png" alt="Cadastro realizado com sucesso">
        <h1>Cadastro realizado com sucesso!</h1>
        <a href="index.php"><button>Página inicial</button></a>

    </div>
</body>

</html>