<?php
function palindromeRearranging($inputString) {
$p = array_count_values(str_split($inputString));

    foreach($p as $v){
        if($v % 2 != 0){
            $oc++;
            
        }
    }
    return $oc < 2;
}