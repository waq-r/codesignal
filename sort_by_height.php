<?php
/*
CodeSignal (CodeFights)
www.codesignal.com

Some people are standing in a row in a park. There are trees between them which cannot be moved. Your task is to rearrange the people by their heights in a non-descending order without moving the trees.
*/

function sortByHeight($a) {
$sortedPeopleWithTrees = $a;
    sort($sortedPeopleWithTrees);
    foreach($sortedPeopleWithTrees as $people){
        if($people === -1){
           array_shift($sortedPeopleWithTrees);
        }
    }
    
    $index = 0;
    $sortedRow = array();
    foreach($a as $element){
        if($element === -1){
            $sortedRow[] = -1;
            continue;
        }
        
        $sortedRow[] = $sortedPeopleWithTrees[$index];
        $index++;
        
    }
    
    return $sortedRow;
}