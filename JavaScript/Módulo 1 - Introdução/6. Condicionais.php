<!DOCTYPE html>
<html>
<head>
	<title>Curso JavaScrip :. Rocketseat</title>
</head>
<body>
	<script>

		function retornaSexo(sexo) {
			// M, F
			// Masculino, Feminino

			// Dessa forma ele defini que a variavel sexo é M | if (sexo = 'M') {
			// Dessa forma ele verifica se a variavel sexo bate com M, se os valores são iguais if (sexo == 'M') {
			// === | Verifica se são iguais e se o Type também é igual


			if (sexo == 'M') {
				return 'Masculino';
			} else if (sexo === 'F'){
				return 'Feminino';
			} else {
				return 'Outro';
			}

			// Outra opção é trabalhar com o Swith Case
			// Ideal pra quando se tem multiplas verificaçõs pra mesma variavel

			Switch(sexo) {
				Case 'M':
					return 'Masculino';
				Case 'F':
					return 'Feminino';
				default:
					return 'Outro';
			}
		}

		var resultado = retornaSexo('M');
		console.log(resultado);
		
	</script>

</body>
</html>