<?php
function isIPv4Address($inputString) {
return filter_var($inputString, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4);
}