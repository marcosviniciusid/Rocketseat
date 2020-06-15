function checaIdade(idade) {
    // Retornar uma promise

    return new Promise(function (resolve, reject) {

        setInterval(() => {
            if (idade > 18) {
                return resolve();
            } else {
                return reject();
            }
        }, 2000);

    });
}

function agoraVai() {
    let inputIdade = document.querySelector('input[name=idade]').value;

    checaIdade(inputIdade)
        .then(function () {
            console.log("Maior que 18");
        })
        .catch(function () {
            console.log("Menor que 18");
        });
}