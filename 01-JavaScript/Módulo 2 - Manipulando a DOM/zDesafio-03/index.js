let nomes = ["Diego", "Gabriel", "Lucas"];
let list = document.querySelector('#list');

for (nome of nomes) {
    list.innerHTML += `<li>${nome}</li>`
    console.log(list)
}

