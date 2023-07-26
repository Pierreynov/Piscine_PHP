<?php
function manageMovements (string $move):array{
    $tab = str_split($move);
    $res = [];
    foreach($tab as $key => $value){
        if ($key == 0){
            if ($value == "R"){
               array_push($res, "RIGHT");
            }elseif ($value == "L"){
                array_push($res, "LEFT");
            }elseif ($value == "F"){
                array_push($res, "FRONT");
            }else {
                array_push($res, "BACKWARDS");
            }            
        }else {
            if ($value == $tab[$key -1]){
                if ($value == "R"){
                    array_push($res, "RIGHT AGAIN");
                 }elseif ($value == "L"){
                     array_push($res, "LEFT AGAIN");
                 }elseif ($value == "F"){
                     array_push($res, "FRONT AGAIN");
                 }else {
                     array_push($res, "BACKWARDS AGAIN");
                 }
            }else {
                if ($value == "R"){
                    array_push($res, "RIGHT");
                 }elseif ($value == "L"){
                     array_push($res, "LEFT");
                 }elseif ($value == "F"){
                     array_push($res, "FRONT");
                 }else {
                     array_push($res, "BACKWARDS");
                 }
            }
        }
    }
    return $res;
}
?>