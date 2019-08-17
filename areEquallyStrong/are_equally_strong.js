function areEquallyStrong(yourLeft, yourRight, friendsLeft, friendsRight) {
return [yourLeft, yourRight].sort().join('') === [friendsLeft, friendsRight].sort().join('');
}