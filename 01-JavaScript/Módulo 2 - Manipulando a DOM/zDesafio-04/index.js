let nomes = ["Diego", "Gabriel", "Lucas"];

function listaUl () {
    return document.querySelector('#list');
}

function start () {

    for (nome of nomes) {
        listaUl().innerHTML += `<li>${nome}</li>`
    }

}

function adicionar() {
    let add = document.querySelector('input[name=nome]');
    listaUl().innerHTML += `<li>${add.value}</li>`;
    add.value = " ";
}

start();