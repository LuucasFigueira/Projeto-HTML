<?php

require_once 'conexao.php';

$email = $_POST['email'];
$senha = $_POST['senhaC'];
$nomeUsuario = "";

$sql = "SELECT id,nome, senha FROM cliente WHERE email = ?"; /* Prepara a query para verificar se o email já está cadastrado no banco de dados */

$stmt = $conexao->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();

$resultado = $stmt->get_result(); /* Obtém o resultado da query para verificar se o email já está cadastrado no banco de dados */
if ($resultado->num_rows > 0) {
    $row = $resultado->fetch_assoc();
    $senhaHash = $row['senha'];

    if (password_verify($senha, $senhaHash)) {
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['nome'] = $row['nome'];
        header("Location: index.php");
        exit();
    } else {
        header("Location: index.php");
    }
} else {
    header("Location: index.php");;
}
