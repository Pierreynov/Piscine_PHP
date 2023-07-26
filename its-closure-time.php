<?php
function f() { 
    $result = array();
    $result["+"] = function($x, $y) { return $x+$y; };
    $result["-"] = function($x, $y) { return $x-$y; };
    $result["*"] = function($x, $y) { return $x*$y; };
    return $result;
}
?>