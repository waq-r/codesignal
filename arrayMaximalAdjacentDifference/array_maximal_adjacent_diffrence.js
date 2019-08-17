function arrayMaximalAdjacentDifference(inputArray) {
    let maxd = 0;
    for(var i = 1; i < inputArray.length; i++){
        let dif = Math.abs(inputArray[i]-inputArray[i-1]);
        if(dif > maxd){
            maxd = dif;
        }
    }
return maxd;
}