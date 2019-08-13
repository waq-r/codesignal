<?php

function reverseInParentheses($inputString)
{

    $reversedInput = $inputString;

    while (strrpos($reversedInput, ")") != false) {
        $reversedInput = preg_replace_callback("/\(\w{0,48}\)/", function ($matches) {return strrev(trim($matches[0], "()"));}, $reversedInput);
    }

    return $reversedInput;
}
