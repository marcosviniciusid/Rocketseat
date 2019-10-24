<!DOCTYPE html>
<html>
<head>
	<title>Curso JavaScrip :. Rocketseat</title>
</head>
<body>
	<div id="app">
		<input type="text" name="nome" id="nome" class="name">
		<button class="botao">Adicionar</button>
	</div>
	<script>
	var linkElement = document.createElement('a');

	linkElement.href = "link";
	linkElement.setAttribute('href','google.com');
	

	textElement = document.createTextNode("Acessar Google");

	linkElement.appendChild(textElement);

	var containerElement = document.querySelector('#app');
	containerElement.appendChild(linkElement);

	// Colocando atributos
	linkElement.setAttribute('title','Site Google');
	//
	var inputElement = document.querySelector('#nome');
	containerElement.removeChild(inputElement);
	</script>

</body>
</html>