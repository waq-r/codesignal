function buildPalindrome(st) {
    let p = st;
    let c = st.length - 1;
    while (p.split('').reverse().join('') != p) {
        p = st + st.slice(0, -c).split('').reverse().join('');
        c--;
    }
    return p;
}