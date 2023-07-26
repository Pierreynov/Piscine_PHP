<?php
function findIn(string $s, array $tab): string | bool{
    foreach($tab as $key => $value){
        if (is_array($value)) {
            $result = findIn($s, $value);
            if ($result != false){
                return $result;
            }
        }
        if ($key == $s){
            return $value;
        }
    }
    return false;
}
?>