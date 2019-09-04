function differentSquares(matrix) {
    let s = [];
    for (var y = 0; y < matrix.length - 1; y++) {
        for (var x = 0; x < matrix[0].length - 1; x++) {
            s.push("" + matrix[y][x] + matrix[y][x + 1] + matrix[y + 1][x] + matrix[y + 1][x + 1]);
        }
    }
    return new Set(s).size;
}