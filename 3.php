<?php

function myfunk1(array $array): float{
    
    $num = 1;
    
    foreach($array as $v) {
        
        $num *= $v;
    }
    return $num;
}
    
$arr = [1, 3, 5, 7, 9];

$res = myfunk1($arr); 

print($res);