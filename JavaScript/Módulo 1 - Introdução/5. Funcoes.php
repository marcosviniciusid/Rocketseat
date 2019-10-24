<!DOCTYPE html>
<html>
<head>
	<title>Curso JavaScrip :. Rocketseat</title>
</head>
<body>
	<script>
		// Definindo variavel VAR, ele é visivel somente dentro da função. Somente dentro do escopo dela.

		function soma (numero1, numero2) {
			var resultado = numero1 + numero2;

			return resultado;
		}

		var resultado = soma(1, 2);
		console.log(resultado);
	</script>

</body>
</html>