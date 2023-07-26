<?php
function checkCircuits(int $n): array{
    $res = [];
    if ($n %2 == 0){
        array_push($res, "Left arm");
    }
    if ($n %3 == 0){
        array_push($res, "Right arm");
    }
    if ($n %5 == 0){
        array_push($res, "Motherboard");
    }
    if ($n %7 == 0){
        array_push($res, "Processor");
    }
    if ($n % 11== 0){
        array_push($res, "Zip Defluxer");
    }
    if ($n % 13 == 0){
        array_push($res, "Motor");
    }
    return $res;

}
?>