<?php
/*
All Longest Strings
www.codesignals.com

Given an array of strings, return another array containing all of its longest strings.

Example

For inputArray = ["aba", "aa", "ad", "vcd", "aba"], the output should be
allLongestStrings(inputArray) = ["aba", "vcd", "aba"].

Input/Output

[execution time limit] 4 seconds (php)

[input] array.string inputArray

A non-empty array.

Guaranteed constraints:
1 ≤ inputArray.length ≤ 10,
1 ≤ inputArray[i].length ≤ 10.

[output] array.string

Array of the longest strings, stored in the same order as in the inputArray.

*/

function allLongestStrings($inputArray) {
    
    $max = max(array_map(strlen, $inputArray));

    foreach($inputArray as $k=>$v){
        
         if(strlen($v) < $max){
            unset($inputArray[$k]);
        }
    }
    
    return array_values($inputArray);
}
