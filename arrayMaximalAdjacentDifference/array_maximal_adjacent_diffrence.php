<?php
function arrayMaximalAdjacentDifference($inputArray) {
    $maxd = array();
    foreach($inputArray as $k=>$v){
        if($k === 0){continue;}
        $maxd[] = abs($v - $inputArray[$k-1]);
    }
    return max($maxd);

}