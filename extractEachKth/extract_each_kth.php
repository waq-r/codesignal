<?php
function extractEachKth(inputArray, k) {
    let key = k-1;
return inputArray.filter((v, i) => {
    if(i === key){
        key += k;
    } else{
        return true;
    }
} )
}
