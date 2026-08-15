<?php
require_once "conexao.php";
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$confSenha = $_POST['confSenha'];

if ($senha !== $confSenha) {
    header("Location: cadastro.php");
    exit("As senhas não coincidem.");

} else {
    $sql = "SELECT id FROM cliente WHERE email = ?"; /* Prepara a query para verificar se o email já está cadastrado no banco de dados */

    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $resultado = $stmt->get_result(); /* Obtém o resultado da query para verificar se o email já está cadastrado no banco de dados */

    if ($resultado->num_rows > 0) {
        header("Location: cadastro.php");
        exit("O email já está cadastrado.");
        
    } else {
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT); /* Criptografa a senha */

        $sql = "INSERT INTO cliente (nome, email, senha) VALUES (?, ?, ?)"; /* Prepara a query para inserir os dados do usuário no banco de dados */
        $stmt = $conexao->prepare($sql); /* Prepara a query para inserir os dados do usuário no banco de dados */
        $stmt->bind_param("sss", $nome, $email, $senhaHash); /* Vincula os parâmetros da query com os valores do formulário */
        $stmt->execute(); /* Executa a query para inserir os dados do usuário no banco de dados */

    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css"> <!-- Link CSS, importando para funcionar -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="cadastroCompleto">
    <img src="img-icones/sim.png" alt="Cadastro realizado com sucesso">
    <h1>Cadastro realizado com sucesso!</h1>
    <a href="index.php"><button>Página inicial</button></a>
    
</div>
</body>
</html>
