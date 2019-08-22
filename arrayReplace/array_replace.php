<?php
<<<<<<< HEAD
function arrayReplace($inputArray, $elemToReplace, $substitutionElem) {
    foreach($inputArray as $k=>$v){
        if($v === $elemToReplace) { $inputArray[$k] = $substitutionElem;}
=======
function arrayReplace($inputArray, $elemToReplace, $substitutionElem)
{
    foreach ($inputArray as $k => $v) {
        if ($v === $elemToReplace) {$inputArray[$k] = $substitutionElem;}
>>>>>>> f6fa6e8dbf22acf8a938bc710b3327e6aabe3737
    }
    return $inputArray;
}
