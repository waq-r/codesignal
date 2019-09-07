function sudoku(grid) {
    let sg = [];
    for (var i = 0; i < 9; i += 3) {
        for (var j = 0; j < 9; j += 3) {
            sg.push([grid[i][j], grid[i][j + 1], grid[i][j + 2],
                grid[i + 1][j], grid[i + 1][j + 1], grid[i + 1][j + 2],
                grid[i + 2][j], grid[i + 2][j + 1], grid[i + 2][j + 2]
            ]);
        }
    }
    return grid.concat(sg, [...grid.map((v, i) => v.map((v1, j) => grid[j][i]))]).filter(v => v.sort().join('') != '123456789').length === 0;
}