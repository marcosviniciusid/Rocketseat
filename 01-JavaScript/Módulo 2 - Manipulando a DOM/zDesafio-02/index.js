let criarBotao = document.querySelector('#criarBotao');

criarBotao.onclick = function () {
    let btnElement = document.createElement('div');

    btnElement.setAttribute('onmouseover', 'colorir(this)');

    btnElement.style.width = '100px';
    btnElement.style.height = '100px';
    btnElement.style.marginRight = '10px';
    btnElement.style.backgroundColor = 'red';

    let containerElement = document.querySelector('#app');

    containerElement.appendChild(btnElement);
}
function getRandomColor() {
    var letters = "0123456789ABCDEF";
    var color = "#";
    for (var i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}
function colorir(divElement) {
    divElement.style.backgroundColor = getRandomColor();
}