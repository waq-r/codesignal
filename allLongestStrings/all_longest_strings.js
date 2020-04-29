function allLongestStrings(inputArray) {
    const max = inputArray.reduce((a, v) => a < v.length ? a = v.length : a, 0);
    return inputArray.filter((v) => v.length === max);
}