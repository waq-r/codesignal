<?php
function growingPlant($upSpeed, $downSpeed, $desiredHeight) {
    
    $height = 0; $days = 1;
        
    while($height < $desiredHeight){
        
        $height += $upSpeed;
        
        if($height >= $desiredHeight){ break;}
        
        $height -= $downSpeed;
        
        $days++;
        
    }
    
    return $days;
}
