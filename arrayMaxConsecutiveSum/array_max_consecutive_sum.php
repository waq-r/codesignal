function arrayMaxConsecutiveSum($inputArray, $k) {
    
    $sum = array_sum(array_slice($inputArray, 0, $k, true));
    $maxs = $sum;
    
        for($key = 1; $key <= sizeof($inputArray)-$k; $key++){

            $sum += $inputArray[$key+$k-1] - $inputArray[$key-1];
            
            if($sum > $maxs){ $maxs = $sum;}
            
        }
    
    return $maxs;

}
