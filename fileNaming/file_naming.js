function fileNaming(names) {
    let c = 1;
    let ni = '';
    for (var i = 0; i <= names.length; i++) {
        n = names.slice(0, i);
        ni = names[i];
        while (n.includes(names[i])) {
            names[i] = ni + '(' + c.toString() + ')';
            c++;
        }
        c = 1;
    }
    return names;
}