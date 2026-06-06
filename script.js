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