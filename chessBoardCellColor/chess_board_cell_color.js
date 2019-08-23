function chessBoardCellColor(cell1, cell2) {
  let c1y = (cell1[0].charCodeAt()-64) %2 === 0;
  let c1x = (cell2[0].charCodeAt()-64) %2 === 0;
  let c2x = cell1[1] % 2 === 0;
  let c2y = cell2[1] % 2 === 0;
  
  return (c1x + c1y + c2x + c2y) % 2 === 0;


}
