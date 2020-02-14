<?php
function longestWord($text) {

    preg_match_all("/[a-z]+/i", $text, $m);

    $longest = '';
    
    foreach($m[0] as $v){
        if(strlen($v) > strlen($longest)){
            $longest = $v;
        }

    }
    return $longest;

}
