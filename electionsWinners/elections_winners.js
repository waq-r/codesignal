function electionsWinners(votes, k) {
    let max = Math.max(...votes);
    if (k === 0) {
        return votes.indexOf(max) === votes.lastIndexOf(max) ? 1 : 0;
    }
    return votes.reduce((a, v, i) => {
        if (v + k > max) {
            a += 1;
        }
        return a;
    }, 0);
}