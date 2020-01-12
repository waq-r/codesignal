<?php

function buildPalindrome($st) {
    $i = 0;
    $oldSt = $st;
    
    while($st != strrev($st)){
        $st = $oldSt . strrev(substr($oldSt,0, $i));
        $i++;
    }
    
    return $st;
}
