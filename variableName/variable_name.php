<?php
function variableName($name) {
    preg_match('/^[a-z_]{1}[\w]*/i', $name, $pm);
     return $pm[0] == $name;
}
