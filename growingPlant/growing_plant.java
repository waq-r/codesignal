int growingPlant(int upSpeed, int downSpeed, int desiredHeight) {
    
    int days = desiredHeight / (upSpeed - downSpeed);
    int a = 0;
    int n = 0;
    for(int i = 0; i < days; i++){
        n = i;
        System.out.println(a);
        a += upSpeed - downSpeed;
        if (a+downSpeed >= desiredHeight || a>=desiredHeight) break;
    }
    return n+1;
}
