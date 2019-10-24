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
		// Pega só o element com o ID que esta referenciado
		var inputElement = document.getElementById('nome');
		// Passa exatamente qual a tag ta utilizando. Ele vai pegar todos os inputs. Então ele sempre retorna um vetor. Se quero só um primeiro input var inputElement = document.getElementsByTagName('nome')[0]; Passo esse zero
		var inputElement = document.getElementsByTagName('nome');
		// Ele sempre retorna um vetor, porque a classe não é única
		var inputElement = document.getElementsByClassName('name')[0];
		// ======================================================================
		// Outra forma de fazer | Pode só utilizar essa forma também
		// Deixa a gente andar pela nossa DOM, percorrer até encontrar nosso elemento
		var inputElement = document.querySelector('body div#app input'); // OU sem body
		// var inputElement = document.querySelector('div#app input');
		// Posso utilizar os atributos do input. Quero buscar um input com o name NOME
		var inputElement = document.querySelector('input[name=nome]');
		// querySelector ele sempre pega somente o primeiro elemento
		// Se quiser mais de um use o ALL var inputElement = document.querySelectorAll('input[name=nome]');      Buscando de elementos o querySelector
		// ======================================================================
		// Referenciar os Eventos pelo JS
		// Procurando o botão com a class botao

		var inputElement = document.querySelector('input[name=nome]');
		var btnElement = document.querySelector('button.botao');

		// Criando o Evento
		btnElement.onclick = function() {
			var text = inputElement.value;
			alert(text);
		}

	</script>

</body>
</html>