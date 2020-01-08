<?php
function circleOfNumbers($n, $firstNumber) {
    
    $opposite = $n/2 + $firstNumber;
    
    return $opposite>=$n?$opposite-$n:$opposite;

}
