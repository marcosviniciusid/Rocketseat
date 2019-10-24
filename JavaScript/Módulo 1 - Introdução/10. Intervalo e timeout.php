<!DOCTYPE html>
<html>
<head>
	<title>Curso JavaScrip :. Rocketseat</title>
</head>
<body>
	<script>
		// Uma função que executa várias vezes dentro de um intervalo

		function exibeAlgo() {
			console.log('Hello Word');
		}

		setInterval(exibeAlgo, 1000);

		// Por que sem () na função?
		// Quando se utiliza () ele já estara executando a função ali, quando se quer referenciar, repassar o escopo pra outro lugar não utiliza (), dái ela não executa a função, ela simplesmente passa a função como parametro pra alguma coisa

		// Aqui ele executa apenas uma vez. Porém, ele vai dar um delay de um tempo que setamos 

		setTimeout(exibeAlgo, 5000);
	</script>

</body>
</html>