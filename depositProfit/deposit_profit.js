function depositProfit(deposit, rate, threshold) {
    for(var i =0; i < 100000; i++){
        if(deposit >= threshold){ return i;}
        deposit += deposit * rate / 100;
        
    }

}
