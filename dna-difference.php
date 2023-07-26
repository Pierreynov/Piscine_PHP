<?php
function dnaDiff( string $s1, string $s2): int | bool {
    $cpt = 0;
    if (strlen($s1) != strlen($s2)){
        return false;
    }
    $temp = str_split($s1);
    $pp = str_split($s2);
    foreach($pp as $key => $value){
        if ($value != $s1[$key]){
            $cpt ++;
        }
    }
    return $cpt;
}
?>