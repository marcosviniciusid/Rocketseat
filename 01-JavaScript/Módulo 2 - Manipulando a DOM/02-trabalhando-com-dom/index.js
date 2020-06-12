var inputElement = document.getElementById('nome');
var inputElement = document.getElementsByTagName('nome')[0];
// ele retorna um vetor

var inputElement = document.getElementsByClassName('nome')[0];

var inputElement = document.querySelector('div#app input');
var inputElement = document.querySelector('input[name=nome]');
var inputElement = document.querySelectorAll('input');
// Seleciona vários elementos

console.log(inputElement);


// Pegando evento pelo JS

var btnElement = document.querySelector('button.botao');
var inputElement2 = document.querySelector('input#nome');

btnElement.onclick = function() {
    var text = inputElement2.value;
    alert(text);
}

