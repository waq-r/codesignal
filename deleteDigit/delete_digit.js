function deleteDigit(n) {
    return n.toString().split('').reduce((a, v, i) => {
        let nx = n.toString().split('');
        nx.splice(i, 1);
        nx = parseInt(nx.join(''));
        if (nx > a) {
            a = nx;
        }
        return a;
    }, 0);
}