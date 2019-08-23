<?php
function alphabeticShift($inputString) {
    $c = [a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z,a];
 
    foreach(str_split($inputString) as $k=>$v){
        $r .= $c[array_search($v, $c)+1];
        }
    return $r;
}
