<?php
/*
CodeSignal (CodeFights)
www.codesignal.com

Given two strings, find the number of common characters between them.
*/

function commonCharacterCount($s1, $s2) {
    
    $s2len = strlen($s2);
    
    foreach(str_split($s1) as $k=>$v){
        $s2 = preg_replace("/$v/", '', $s2, 1);
    }
    
    return $s2len - strlen($s2);
}
