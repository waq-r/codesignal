function alphabeticShift(inputString) {
    return inputString.split('').map((v, i) => String.fromCharCode(v.charCodeAt(0)+1).replace('{', 'a')).join('');

}
