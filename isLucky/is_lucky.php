<?php
/*
CodeSignal (CodeFights)
www.codesignal.com

A ticket number is lucky if the sum of the first half of the digits is equal to the sum of the second half.

Given a even ticket number n, determine if it's lucky or not.
*/

function isLucky($n) {
    $ticketNumberArray = str_split($n);
    $bothHalves = array_chunk($ticketNumberArray, sizeof($ticketNumberArray)/2);
    
    if(array_sum($bothHalves[0]) === array_sum($bothHalves[1])) {
        return true;
    }
    
     return false;
}