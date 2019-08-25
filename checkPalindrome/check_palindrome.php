<?php
function checkPalindrome($inputString) {

return $inputString === implode('', array_reverse(str_split($inputString)));
    
}
