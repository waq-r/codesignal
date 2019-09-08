<?php
function isMAC48Address($inputString) {
    
    $ia = explode('-', $inputString);
    
    if(sizeof($ia) != 6){ return false;}
    
    foreach($ia as $v){
        
        if(strlen($v) != 2 || !preg_match("/^[a-f0-9]{2,}$/i", $v)){
            return false;
        }
    }
    
    return true;

}
