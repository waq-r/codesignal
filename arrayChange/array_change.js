function arrayChange(inputArray) {
    //since elements are increaed by one diffrence between sequence and input would be number of moves required.
    
    let inputSum = inputArray.reduce((a,v) => a+v);
    let sisum = inputArray.reduce((a,v,i,ar)=>{v>=ar[i+1]?ar[i+1]=v+1:v; return ar;},0);
    return sisum.reduce((a,v) => a+v) - inputSum;
}