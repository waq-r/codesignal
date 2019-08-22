function evenDigitsOnly(n) {
    
return n.toString().split('').reduce((a, v) => (a += parseInt(v) % 2 !=  0),0) === 0;
}
