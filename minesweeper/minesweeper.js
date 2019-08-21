function minesweeper(matrix) {
    var ms = matrix;
    let cells = [
        [-1, -1],
        [-1, 0],
        [-1, 1],
        [0, -1],
        [0, 1],
        [1, -1],
        [1, 0],
        [1, 1]
    ];
    return ms.map((row, y) => row.map((col, x) => cells.reduce((a, v) => a += !!(matrix[y + v[0]] && matrix[y + v[0]][x + v[1]]), 0)));
}