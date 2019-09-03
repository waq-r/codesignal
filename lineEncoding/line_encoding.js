function lineEncoding(s) {
    return s.split('').reduce((a, v, i, arr) => {
        if (arr[i - 1] === v) {
            if (!isNaN(parseInt(a.slice(-2, -1)))) {
                a = a.slice(0, -2) + (parseInt(a.slice(-2)) + 1) + v;
            } else {
                a = (a.slice(0, -1)) + 2 + v;
            }
        } else {
            a = a + v;
        }
        return a;
    });
}