function boxBlur(image) {
var bb = [[]];
var loops = image.length-2;
for(var y = 0; y < loops; y++){
    for(var x = 0; x < image[0].length -2; x++){
        let squareSum=
            image[0][x]+image[0][x+1]+image[0][x+2]+
            image[1][x]+image[1][x+1]+image[1][x+2]+
            image[2][x]+image[2][x+1]+image[2][x+2];
        if (!bb[y]) bb[y] = [];
        bb[y][x] = parseInt(squareSum/9);
    }
    image.shift();
}
    return bb;
}