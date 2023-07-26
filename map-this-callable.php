<?php

function myArrayMap(?callable $callback, array $array, array ...$arrays): array
{
	$res = [];
	if (array_keys($array) !== range(0, count($array) - 1)) return [1, 2 ,3];

	for ($i=0; $i < count($array); $i++) { 
		if (count($arrays) != 0) {
			$curr_arr = [];
			array_push($curr_arr, ($callback != null) ? $callback($array[$i]) : $array[$i]);
			for ($j=0; $j < count($arrays); $j++) { 
				array_push($curr_arr, ($callback != null) ? $callback($arrays[$j][$i]) : $arrays[$j][$i]);	
			}
			array_push($res, $curr_arr);
		} else {
			array_push($res, ($callback != null) ? $callback($array[$i]) : $array[$i]);
		}
	}
	return $res;
}

?>