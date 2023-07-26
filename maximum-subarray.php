<?php
function findMaximumSubarray (array $tab): int | float{
    $best = 0;
    $sum = 0;
    foreach($tab as $value){
        $sum = max(0, $sum + $value);
        $best = max($best, $sum);
    }
    return $best;
}
?>