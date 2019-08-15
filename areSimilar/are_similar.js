/*
 * Algorithm condition can only be true if both arrays have no more 
 * than 2 non-matching elements on same indexes. However, this subset of non-matching 
 * elements must match together.
 */
function areSimilar(a, b) {
    let diffrence = [];
    for (var i = 0; i < a.length; i++) {
        if (a[i] != b[i]) {
            diffrence.push([a[i], b[i]]);
        }
    }
    if (diffrence.length == 0) {
        return true;
    }
    if (diffrence.length < 3) {
        return JSON.stringify(diffrence[0].sort()) == JSON.stringify(diffrence[1].sort());
    }
    return false
}