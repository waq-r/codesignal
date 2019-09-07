function validTime(time) {
    let t = time.split(':');
    return Number(t[0]) < 24 && Number(t[1]) < 60;
}