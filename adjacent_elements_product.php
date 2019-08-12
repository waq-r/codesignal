<?php
/*
CodeSignal (CodeFights)
www.codesignal.com

Given an array of integers, find the pair of adjacent elements that has the largest product and return that product.
 */

function adjacentElementsProduct($inputArray)
{
    foreach ($inputArray as $k => $v) {
        $next = next($inputArray);
        if ($next != null) {
            $asendingProducts[] = $v * $next;
        }

    }
    return max($asendingProducts);

}
