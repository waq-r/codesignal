function knapsackLight(value1, weight1, value2, weight2, maxW) {
    if (weight1 + weight2 <= maxW) {
        return value2 + value1;
    }
    if (weight1 <= maxW && value1 > value2) {
        return value1;
    }
    if (weight2 <= maxW && value2 > value1) {
        return value2;
    }
    if (weight1 <= maxW) {
        return value1;
    } else if (weight2 <= maxW) {
        return value2;
    } else {
        return 0;
    }
}