function almostIncreasingSequence(sequence) {
let c = 0;
    for(let i=1; i<sequence.length; i++){
        if(sequence[i] <= sequence[i-1]){
            c++;
        }
        if(sequence[i] <= sequence[i-2] && sequence[i+1] <= sequence[i-1]){
            c++;
        }
}
    return c<2;
}
