<?php
function longestDigitsPrefix($inputString) {
    
    preg_match('/^\d*/', $inputString, $match);
    
    return $match[0];

}
