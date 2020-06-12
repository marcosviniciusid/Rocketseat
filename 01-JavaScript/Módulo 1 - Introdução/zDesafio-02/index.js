function pares (x, y) {
    for (x; x <= y; x++) {
        var r = (x % 2 == 0) ? 'Par:' : 'Impar:';
        console.log(r+" "+x);
    }
}

pares(32, 321);