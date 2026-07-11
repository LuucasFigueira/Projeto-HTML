// Aumentar a quantidade dos produtos selecionados.
function aumentar(id){
    let numero = document.getElementById(id);
    let valor = Number(numero.innerText) + 1;

    numero.innerText = valor;

    // Atualiza o input hidden
    document.getElementById("input-" + id).value = valor;
}

function diminuir(id){
    let numero = document.getElementById(id);
    let valor = Number(numero.innerText);

    if(valor > 0){
        valor--;
    }

    numero.innerText = valor;

    // Atualiza o input hidden
    document.getElementById("input-" + id).value = valor;
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

// Validar cadastro do cliente
function validarCadastro() {
    let senha = document.getElementById("senha").value;
    let confSenha = document.getElementById("confSenha").value;

    if (senha != confSenha) {
        alert("Senhas não coincidem!");
        return false;
    }
    return true;
}