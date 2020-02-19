<?php
function sumUpNumbers($inputString) {

    preg_match_all('/\d+/', $inputString, $m);

    return array_sum($m[0]);

}
