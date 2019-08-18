function avoidObstacles(inputArray) {
    for(var i = 2; i < 100000; i++){
        var d = inputArray.filter((v)=>{if(v%i == 0){return i;}});
        if(d.length == 0) {return i;}

    }

}