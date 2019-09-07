function longestWord(text) {
    return text.match(/[a-zA-Z]+/g).reduce((a, v) => v.length > 1 && v.length > a.length ? v : a, '');
}