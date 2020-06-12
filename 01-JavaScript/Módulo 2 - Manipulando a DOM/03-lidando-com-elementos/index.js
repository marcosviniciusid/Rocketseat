
var linkElement = document.createElement('a');

linkElement.setAttribute('href', 'https://devprocommunity.com.br');
linkElement.setAttribute('title', 'Site Dev Pro');

var textElement = document.createTextNode('Acessar o site da DevPro');

linkElement.appendChild('textElement');

var containerElement = document.querySelector('#app');
containerElement.appendChild(linkElement);

// var inputElement = document.querySelector('#nome');
// containerElement.removeChild(inputElement);


