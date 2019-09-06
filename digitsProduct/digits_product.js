function digitsProduct(product) {
    
    for(var i = 1; i <= 9999; i++){
        
        let c = i.toString().split('').reduce((a,v) => a*Number(v), 1);
        
        if(c === product){
            return i;
        }
    }
    return -1;
}
