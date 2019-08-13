function reverseInParentheses(inputString) {
    while (inputString.indexOf(")", 0) != -1) {
        var stringInParantheses = inputString.match(/\(\w{0,48}\)/).toString();
        var insideStringReversedAndTrimmed = stringInParantheses.slice(1, -1).split("").reverse().join("");
        inputString = inputString.replace(stringInParantheses, insideStringReversedAndTrimmed);
    }
    return inputString;
}