function isLucky(n) {
    n = n + "";
    return Array.from(n.slice(0, n.length / 2), Number).reduce((a, i) => a + i) === Array.from(n.slice(n.length / 2), Number).reduce((a, i) => a + i);
}