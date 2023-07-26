<?php

function lcwords($str) {
    $temp = '';

    $words = explode(' ', $str);

    foreach ($words as $word) {
        $word = ' ' . lcfirst($word);
        $temp .= $word;
    }

    return ltrim($temp);
}

function capsMe(string $var): string{
    return strtoupper($var);
}
function lowerMe(string $var): string{
    return strtolower($var);
}
function upperCaseFirst(string $var): string{
    return ucwords($var);
}
function lowerCaseFirst(string $var): string{
    return lcwords($var);
}
function removeBlankSpace(string $var): string{
    return trim($var);
}


?>

