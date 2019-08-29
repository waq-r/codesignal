int knapsackLight(int value1, int weight1, int value2, int weight2, int maxW) {

    return Math.max(Math.max(value1*(weight1<=maxW?1:0), value2*(weight2<=maxW?1:0)), (value1+value2)*(weight1+weight2<=maxW?1:0));
}
