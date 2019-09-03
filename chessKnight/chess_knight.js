function chessKnight(cell) {
    let n = Number(cell[1]);
    let l = cell[0].charCodeAt() - 96;
    return (8 - n >= 2 && l + 1 <= 8) + (8 - n >= 1 && l + 2 <= 8) + (n - 1 >= 1 && l + 2 <= 8) + (n - 2 >= 1 && l + 1 <= 8) + (n - 2 >= 1 && l - 1 >= 1) + (n - 1 >= 1 && l - 2 >= 1) + (n + 1 <= 8 && l - 2 >= 1) + (n + 2 <= 8 && l - 1 >= 1);
}