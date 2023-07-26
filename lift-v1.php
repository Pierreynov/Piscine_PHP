<?php
function getFloor(int $current, int|null $requested, array $buttons):int| null{
    $res = 9999999999999;
    $etage = null;
    if ($requested != null){
        return $requested;
    }else {
        foreach($buttons as $key => $values){
            if (abs($values - $current) < $res){
                $res = abs($values - $current);
                $etage = $key;
            }
        }
        
    }
    return $buttons[$etage];
}

function getDirection(int $current, int|null $requested, array $buttons):int {
    if ($requested != null){
        if ($current < $requested){
            return 1 ;
        }elseif ($current == $requested){
            return 0;
        }else {
            return -1;
        }
    }elseif (count($buttons)==0){
        return $current;
    }else {
        $res = 9999999999999;
        $etage = null;
        foreach($buttons as $key => $values){
            if (abs($values - $current) < $res){
                $res = abs($values - $current);
                $etage = $key;
            }
        }
        if ($current < $buttons[$etage]){
            return 1 ;
        }elseif ($current == $buttons[$etage]){
            return 0;
        }else {
            return -1;
        }
    }

}
?>