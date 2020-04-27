<?php
/*
CodeSignal (CodeFights)
www.codesignal.com

A ticket number is lucky if the sum of the first half of the digits is equal to the sum of the second half.

Given a even ticket number n, determine if it's lucky or not.
*/

function isLucky($n) {
    
    $n = array_chunk(str_split($n), strlen((string)$n)/2);
    
    return array_sum($n[0]) === array_sum($n[1]);
}
