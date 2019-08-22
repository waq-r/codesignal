<?php
function arrayReplace($inputArray, $elemToReplace, $substitutionElem) {
    foreach($inputArray as $k=>$v){
        if($v === $elemToReplace) { $inputArray[$k] = $substitutionElem;}
    }
    return $inputArray;
}
