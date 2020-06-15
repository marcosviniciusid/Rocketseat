

function buscar() {
    var user = document.querySelector('input[name=user]');
    var userName = user.value;

    var listUl = document.querySelector('#repos');

    axios.get('https://api.github.com/users/' + userName + '/repos')
        .then(function (response) {

            for (data of response.data) {

                var liElement = document.createElement('li');

                var name = document.createTextNode(data.name);
                liElement.appendChild(name);
                listUl.appendChild(liElement);
            }

        })
        .catch(function (error) {
            console.warn(error);
        });
}

