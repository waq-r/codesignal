function isBeautifulString(inputString) {
    
    return Object.values(inputString.split('').sort().reduce((a,v,i,arr) => {
        if(v == arr[i-1]){
            a[v]++;
        }

        else{
            if(i > 0 && v.charCodeAt() != arr[i-1].charCodeAt()+1){
                a[String.fromCharCode(arr[i-1].charCodeAt()+1)] = 0;
        
            }
             a[v] = 1;
            
        }
        
        return a;
        
    }, {"a":0})).filter((v,i,arr) => v > arr[i-1]).length === 0;
    

}
