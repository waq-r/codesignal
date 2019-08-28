<?php
function differentSymbolsNaive($s)
{

    return sizeof(array_unique(str_split($s)));
}
