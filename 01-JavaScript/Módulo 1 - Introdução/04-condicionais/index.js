function retornarSexo(sexo) {
    // M, F
    // Masculino, Feminino

    if (sexo === 'M') {
        // == verifica o valor
        // === verifica o valor e o tipo
        return 'Masculino';
    } else {
        return 'Feminino';
    }
}

var resultado = retornarSexo('M');
console.log(resultado);



function retornarSexo2(sexo) {
    // M, F
    // Masculino, Feminino

    switch(sexo) {
        case 'M':
            return 'Masculino';
        case 'F':
            return 'Feminino';
        default:
            return 'Outro';
    }
}
var resultado2 = retornarSexo2('M');
console.log(resultado2);