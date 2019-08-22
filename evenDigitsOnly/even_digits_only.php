<?php
function evenDigitsOnly($n) {
    $isEven = true;

foreach(str_split($n) as $d){
    if($d % 2 !== 0){
        $isEven = false;
        break;
    }
}
    return $isEven;
}
