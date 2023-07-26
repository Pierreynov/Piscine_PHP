<?php
function breakLines(string $s,int $n): string{
    $arr = explode(" ",$s); 
    $cpt = 0;
    $result ="";
    foreach($arr as $word){
        $temp = explode("\n",$word);
        if (count($temp)>1){
            if ($cpt + strlen($temp[0]) > $n){
                $result = trim($result) . "\n" . $temp[0] . " ";
                $cpt = strlen($word) +1  ;
                $word = $temp[1];
            }else {
              $cpt = $cpt + strlen($temp[0]) + 1 ; 
              $result= $result . $temp[0] . " " ;
            }
        }
        if ($cpt + strlen($word) > $n){
            $result = trim($result) . "\n" . $word . " ";
            $cpt = strlen($word) +1  ;
        }else {
          $cpt = $cpt + strlen($word) + 1 ; 
          $result= $result . $word . " " ;
        }
        
    }

    return trim($result) ;
}
?>