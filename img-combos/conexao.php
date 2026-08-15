<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "alehbolosedoces";


   try {
        $conexao = new mysqli($servidor, $usuario, $senha, $banco);
        } catch (mysqli_sql_exception $e) {
        die("Erro na conexão! Tente novamente.");
    }
?>