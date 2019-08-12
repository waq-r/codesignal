<?php
/*
CodeSignal (CodeFights)
www.codesignal.com

Ratiorg got statues of different sizes as a present from CodeMaster for his birthday, each statue having an non-negative integer size. Since he likes to make things perfect, he wants to arrange them from smallest to largest so that each statue will be bigger than the previous one exactly by 1. He may need some additional statues to be able to accomplish that. Help him figure out the minimum number of additional statues needed.
 */

function makeArrayConsecutive2($statues)
{
    $statuesSorted = sort($statues);

    //generate a new array to intersect $statues,
    //find upper and lower boundries for new array from $statues
    for ($i = min($statues); $i <= max($statues); $i++) {
        $allStatues[] = $i;
    }

    $requiredStatues = array_diff($allStatues, $statues);

    return sizeof($requiredStatues);
}
