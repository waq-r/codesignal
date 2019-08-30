function digitDegree(n) {
    let count = 0;
    while (('' + n).length > 1) {
        n = ('' + n).split('').reduce((a, v) => {
            a += parseInt(v);
            return a;
        }, 0);
        count++;
    }
    return count;
}