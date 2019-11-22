<?php
/*
CodeSignal (CodeFights)
www.codesignal.com

Some people are standing in a row in a park. There are trees between them which cannot be moved. Your task is to rearrange the people by their heights in a non-descending order without moving the trees.
*/

function sortByHeight($a) {
    
    $s = array_filter($a, function($v){ return $v != -1;});
    sort($s);
    
    foreach($a as $k=>$v){
        if($v === -1){ continue; }
        
        $a[$k] = array_shift($s);
    }
    
    return $a;

}
