function arrayReplace(inputArray, elemToReplace, substitutionElem) {
    return inputArray.map((ielem, i) => ielem === elemToReplace ? substitutionElem : ielem);

}
