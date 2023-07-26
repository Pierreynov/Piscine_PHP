<?php
function reverse(array $arr): array{
    return array_reverse($arr);
}

function push(array &$arr,string ...$strings): int{
    foreach ($strings as $values){
        array_push($arr, $values);
    }
    return count($arr);
}

function sum(array $arr): int{
    $res = 0;
    foreach ($arr as $values){
        $res += $values;
    }
    return $res;
}

function arrayContains(array $arr, int|string|float $mixe): mixed{
    foreach ($arr as $values){
        if ($values == $mixe){
            return $mixe;
        }
    }
    return "Nothing";
}

function merge(array $arr1, array $arr2, array $arr3){
    return array_merge($arr1, $arr2, $arr3);
}

?>