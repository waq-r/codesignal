<?php
function centuryFromYear($year)
{
    $fourDigitYear = sprintf('%04d', $year);
    $century       = str_split($fourDigitYear, 2);
    $centuryStart  = $century[1] != 00 ? 1 : 0;
    return $century[0] + $centuryStart;
}
