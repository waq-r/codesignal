function absoluteValuesSumMinimization(a) {
    let sum = a.map((v, i) => a.reduce((a, rv) =>  {a += Math.abs(rv - v); return a;} , 0 ));
    return a[sum.indexOf(Math.min(...sum))];
}
