<?php
function depositProfit($deposit, $rate, $threshold) {
    $i = 0;
    while($deposit < $threshold){
        $i++;
        $deposit += $deposit * $rate/100;
    }
    return $i;
}
