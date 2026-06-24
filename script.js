// Aumentar a quantidade dos produtos selecionados.
function aumentar(id){
    let numero = document.getElementById(id);
    numero.innerText = Number(numero.innerText) + 1;
}

function diminuir(id){
    let numero = document.getElementById(id);

    if(Number(numero.innerText) > 0){
        numero.innerText = Number(numero.innerText) - 1;
    }
}

// Mostra a tela de login.
const btnLogin = document.getElementById("btnLogin");

const telaLogin = document.getElementById("telaLogin");

const fecharModal = document.getElementById("fecharModal");


btnLogin.addEventListener("click", function() {

    telaLogin.style.display = "flex";

});


fecharModal.addEventListener("click", function() {

    telaLogin.style.display = "none";

});

//validar cadastro do cliente

function validarCadastro() {
    let senha = document.getElementById("senha").value;
    let confSenha = document.getElementById("confsenha").value;

    if (senha != confSenha) {
        alert("Senhas não coincidem!");
        return false;
    }
    return true;
}