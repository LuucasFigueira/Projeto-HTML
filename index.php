<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="stylesheet" href="projetoCss.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aleh Bolos e Doces | Bolos Caseiros e Doces Artesanais</title>
</head>
<div id="telaLogin">
        <div class="caixa-login">
            <button id="fecharModal">X</button>
            <h2>Login</h2>
            <input type="email" name="loginEmail" placeholder="Digite seu e-mail">
            <input type="password" name="loginPassword" placeholder="Digite sua senha">
            <button id="entra">Entrar</button>
            <a href="cadastro.php">
            <button id="cadastro">Cadastrar</button></a>
        </div>
    </div>
<body>
    <div class="inicio">
        <img id= "logo" src="img-logo/logo-aleh-R.png" alt="Logo Aleh Bolos e Doces">
        <a id="insta" href="https://www.instagram.com/alehbolosedoces">
            <img id="instagram" src="img-icones/img-instagram-icone.png" alt="instagram">
            <h2>instagram</h2>
        </a>
        <a id="encomendas" href="encomenda.html">
            <img id="encomenda" src="img-icones/img-encomenda-icone.png" alt="Encomenda">
            <h2>Encomedar</h2>
        </a>
    </div>
    <div class="login">
        <button id="btnLogin">Login</button>
    </div>

    <div class="logo-cardapio">
        <img src="img-logo/logo-cardapio.png" alt="cardapio">
    </div>        
    <div class="chocolate-derretido" alt="chocolate derretido">
        <img src="img-logo/borda-chocolate.png" alt="borda chocolate">
    </div>    

    <div class="fundo-cardapio">
        <div class="produtos" >
                <div class="itens">
                    <img  src="img-bolos/fatia-bolo-choco-maracuja.jpg">
                    <h3>Fatia de Bolo Brigadeiro e Maracujá</h3>
                    <p class="preco">R$ 24,99</p>
                    <div class="quantidade">
                        <button onclick="diminuir('fatia-bolo-choco-maracuja')">-</button>
                        <span id="fatia-bolo-choco-maracuja">0</span>
                        <button onclick="aumentar('fatia-bolo-choco-maracuja')">+</button>
                    </div>
                </div>
                <div class="itens">
                    <img src="img-tortas/fatia-morango.png">
                    <h3>Torta BomBom de Morango </h3>
                    <p class="preco">R$ 24,99</p>
                    <div class="quantidade">
                        <button onclick="diminuir('torta-choco-morango')">-</button>
                        <span id="torta-choco-morango">0</span>
                        <button onclick="aumentar('torta-choco-morango')">+</button>
                    </div>
                </div>
                <div class="itens">
                    <img src="img-bolos/fatia-bolo-ninho-geleia.jpeg">
                    <h3>Fatia de Bolo Ninho com Geleia de Morango</h3>
                    <p class="preco">R$ 24,99</p>
                    <div class="quantidade">
                        <button onclick="diminuir('fatia-bolo-ninho')">-</button>
                        <span id="fatia-bolo-ninho">0</span>
                        <button onclick="aumentar('fatia-bolo-ninho')">+</button>
                    </div>
                </div>
                <div class="itens">    
                    <img src="img-tortas/fatia-uva.jpeg">
                    <h3>Torta BomBom de Uva</h3><br>
                    <p class="preco">R$ 24,99</p>
                    <div class="quantidade">
                        <button onclick="diminuir('fatia-torta-uva')">-</button>
                        <span id="fatia-torta-uva">0</span>
                        <button onclick="aumentar('fatia-torta-uva')">+</button>
                    </div>    
                </div>
        </div>
    </div>
    
<script src="script.js"></script>
</body>
</html>
