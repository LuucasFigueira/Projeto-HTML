<?php
// Código para processar a encomenda
require_once 'conexao.php';

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$produto = $_POST['produto'];
$quantidade = $_POST['quantidade'];
$data = $_POST['data'];
$observacao = $_POST['observacao'];

$mensagem = "🍰 *Nova encomenda*%0A%0A";
$mensagem .= "👤 *Nome:* $nome%0A";
$mensagem .= "📱 *Telefone:* $telefone%0A";
$mensagem .= "🎂 *Produto:* $produto%0A";
$mensagem .= "🔢 *Quantidade:* $quantidade%0A";
$mensagem .= "📅 *Data desejada:* $data%0A";
$mensagem .= "📝 *Observação:* $observacao%0A%0A";
$mensagem .= "🖼️ *Imagem de referência:* (Enviar em baixo - Opcional)";

$numero = "5541998298487"; // coloque aqui o WhatsApp da loja

header("Location: https://wa.me/$numero?text=$mensagem");
exit;
