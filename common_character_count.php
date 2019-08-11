<?php
/*
CodeSignal (CodeFights)
www.codesignal.com

Given two strings, find the number of common characters between them.
*/

function commonCharacterCount($s1, $s2) {
    $s1Characters = array_count_values(str_split($s1));
    $s2Characters = array_count_values(str_split($s2));
    
    $characterCount = array();
    foreach($s1Characters as $key=>$value){

        if($value < $s2Characters[$key]){
        $characterCount[$key] = $value;
        }
        else {
           $characterCount[$key] = $s2Characters[$key]; 
        }
        
    }

    return array_sum($characterCount);
}