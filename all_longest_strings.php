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
    $lengths = array_map(strlen, $inputArray);
    arsort($lengths);

    
    //print_r($lengths);
    $output = array();
    foreach($lengths as $k=>$v){
         if($v < max($lengths)){
            break;
        }
        $output[$k] = $inputArray[$k];
    }
    ksort($output);
    // print_r($output);
    return array_values($output);
}