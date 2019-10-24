<!DOCTYPE html>
<html>
<head>
	<title>Curso JavaScrip :. Rocketseat</title>
</head>
<body>
	<script>
	// Exercício 01
	// ======================================================
	// ++++++++++++++++++++++++++++++++++++++++++++++++++++++

	// MEU JEITO
	/*
		function usuario() {
			var endereco = {
				rua: "Rua dos Pinheiros",
				numero: 1293,
				bairro:"Centro",
				cidade: "São Paulo",
				uf: "SP"
			}

			return ("O usuário mora em "+endereco.cidade+" / "+endereco.uf+", no bairro "+endereco.bairro+', na rua "'+endereco.rua+'" com nº '+endereco.numero+".");
		}

		console.log(usuario());
	
	// DO PROFESSOR
		function usuario(endereco) {
			return ("O usuário mora em "+endereco.cidade+" / "+endereco.uf+", no bairro "+endereco.bairro+', na rua "'+endereco.rua+'" com nº '+endereco.numero+".");
		}
		var endereco = {
			rua: "Rua dos Pinheiros",
			numero: 1293,
			bairro:"Centro",
			cidade: "São Paulo",
			uf: "SP"
		}

		console.log(usuario(endereco));
		
		// Exercicio 02 
		// ======================================================
		// ++++++++++++++++++++++++++++++++++++++++++++++++++++++

		function pares (x, y) {
			for (var i = x; i <= y; i++) {
				if (i % 2 === 0) {
					console.log(i);
				}
			}
		}
		var resultado = pares (21, 321);
		console.log(resultado);
		

		// Exercicio 03 
		// ======================================================
		// ++++++++++++++++++++++++++++++++++++++++++++++++++++++

		function temHabilidade (skills) {
			//# var teste = skills.indexOf('Javascrip');
			//# console.log("Meu teste: "+teste);

			return (skills.indexOf('Javascrip') !== -1);
		}

		var skills = ["Javascrip", "ReactJS", "React Native"];
		console.log(temHabilidade(skills)); // True ou false
		

		// Exercicio 04 
		// ======================================================
		// ++++++++++++++++++++++++++++++++++++++++++++++++++++++

		function experiencia (anos) {
			if (anos <= 1) {
				return "Iniciante";
			} else if (anos <= 3) {
				return "Intermediário";
			} else if (anos <= 6) {
				return "Avançado";
			} else {
				return "Jedi Master";
			}
		}

		var anosEstudo = 4;
		console.log(experiencia(anosEstudo));

		// De 0-1 ano: Iniciante
		// De 1-3 anos: Intermediario
		// De 3-6 anos: Avançado
		// De 7 acima: Jedi Master
*/
		// Exercicio 05 
		// ======================================================
		// ++++++++++++++++++++++++++++++++++++++++++++++++++++++

		var usuarios = [
			{
				nome: "Diego",
				habilidades: ["Javascrip", "ReactJS", "Redux"]
			},
			{
				nome: "Gabriel",
				habilidades: ["VueJS", "Ruby on Rails", "Elixir"]
			}

		];

		function exibir(usuarios) {
			for (let user of usuarios) {
				var texto = "O "+user.nome+" possui as habilidade: "+user.habilidades.join(', ');
				console.log(texto);
			}
		}

		exibir(usuarios);
		
	</script>

</body>
</html>