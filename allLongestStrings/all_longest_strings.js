function allLongestStrings(inputArray) {
    let max = inputArray.reduce((a, v) => {
        if (a < v.length) {
            a = v.length;
        }
        return a;
    }, 0);
    return inputArray.filter((v) => v.length === max);
}