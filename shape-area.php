<?php
/*
CodeSignal (CodeFights)
www.codesignal.com

A 1-interesting polygon is just a square with a side of length 1. An n-interesting polygon is obtained by taking the n - 1-interesting polygon and appending 1-interesting polygons to its rim, side by side. . Your task is to find the area of a polygon for a given n.
 */

function shapeArea($n)
{

    $nOuterQubes = $n * $n;
    $innerLine   = $n - 1;
    $nInnerQubes = $innerLine * $innerLine;
    return $nOuterQubes + $nInnerQubes;
}
