<?php
function addBorder($picture)
{
    foreach ($picture as $k => $v) {
        $picture[$k] = '*' . $v . "*";
    }
    $asterisks = str_pad("", strlen($picture[0]), "*");
    array_push($picture, $asterisks);
    array_unshift($picture, $asterisks);
    return $picture;
}
