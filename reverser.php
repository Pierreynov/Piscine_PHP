<?php
function reverse(string $var): string
{   
    return strrev($var);
}

function isPalindrome(string $var): bool
{
    $res = strrev($var);
    if ($var == $res){
        return true;
    }
    return false;

}
?>