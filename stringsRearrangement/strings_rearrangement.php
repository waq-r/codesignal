<?php
function stringsRearrangement($i)
{
    foreach ($i as $v) {
        $o = 0;
        foreach ($i as $z) {
            $o += levenshtein($v, $z) == 1;
        }

        if (!$o || $o > 4) {
            return 0;
        }

        $x += $o < 2;
    }
    return $x < 3;
}
