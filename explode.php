<?php
function explodeWords(string $s, string $sep = " ", int $limit = PHP_INT_MAX):array {
    $bool = false;
    if($limit < 0 ){
    	$limit = PHP_INT_MAX;
    	$bool = true;
    }
    $tab = str_split($s);
    $i = 0;
    $res = [];
    $word = "";
   	foreach($tab as $letter){
       	
        	if ($letter != $sep ){
            	 $word = $word . $letter;
        	}elseif( $i < $limit-1) {
        		 array_push($res, $word);
            	$i ++;
            	$word ="";
    		}else {
    			$word = $word . $letter;
    		}
    }
    	
    	
    
    array_push($res, $word);
    if ($bool == true){
    	array_pop($res);
    }
    return $res;
    
} 
?>