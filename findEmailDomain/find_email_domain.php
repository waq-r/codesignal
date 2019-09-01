<?php
function findEmailDomain($address) {
    
    return array_pop(explode('@', $address));

}
