<?php
function validTime($time) {
    $timeArray = explode(':',$time);
    return $timeArray[0] < 24 && $timeArray[1] < 60;

}