
let criarBotao = document.querySelector('#criarBotao');

criarBotao.onclick = function() {
    let btnElement = document.createElement('div');
    
    btnElement.style.width = '100px';
    btnElement.style.height = '100px';
    btnElement.style.marginBottom = '10px';
    btnElement.style.backgroundColor = 'red';

    let containerElement = document.querySelector('body');

    containerElement.appendChild(btnElement);
}