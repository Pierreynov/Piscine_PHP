<?php
function joinWords(array $tab, string $sep = " "):string {
    $res = "";
    foreach($tab as $key => $word){
        if ($key == count($tab)-1){
            $res = $res . $word ;
        }else {
        $res = $res . $word . $sep;
        }
    }
    return $res;
}
?>