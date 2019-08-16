<?php
function arrayChange($inputArray) {
    $sum = array_sum($inputArray);
    for($i = 1; $i < sizeof($inputArray); $i++){
       if($inputArray[$i] <= $inputArray[$i-1]){
           $inputArray[$i] = $inputArray[$i-1]+1;
       }
    }
    return array_sum($inputArray) - $sum;

}