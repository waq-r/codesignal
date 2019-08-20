<?php
function areEquallyStrong($yourLeft, $yourRight, $friendsLeft, $friendsRight) {
    
    return sizeof(array_intersect([$yourLeft, $yourRight], [$friendsLeft, $friendsRight])) === 2;
}