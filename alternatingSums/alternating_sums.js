function alternatingSums(a) {
    let teamWeights = [0, 0];
    a.forEach(function(v, i) {
        i % 2 == 0 ? teamWeights[0] += v : teamWeights[1] += v;
    });
    return teamWeights;
}