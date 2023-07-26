<?php
function searchWord(array $board,string $search) : bool
{
    for($y = 0;$y < strlen($search);$y++){
        for($x = $y;$x < strlen($search);$x++){
            if ($x != $y and $search[$y] == $search[$x]){
                return false;
            }
        }
    }
    for($y = 0;$y < count($board);$y++){
        for($x = 0;$x < count($board[0]);$x++){
            if ($board[$x][$y] == $search[0]){
                return search_recur($board,substr_replace($search ,"", 0,1),$x,$y);
            }
        }
    }
    return false;
}

function search_recur(array $board,string $search,int $x,int $y) : bool
{
    if (strlen($search) == 0){
        return true;
    }
    if (empty($board[$y-1][$x]) == false){
        if ($board[$y-1][$x] == $search[0]){
            return search_recur($board,substr_replace($search ,"", 0,1),$x,$y-1);
        }
    }
    if (empty($board[$y][$x+1]) == false){
        if ($board[$y][$x+1] == $search[0]){
            return search_recur($board,substr_replace($search ,"", 0,1),$x+1,$y);
        }
    }
    if (empty($board[$y][$x-1]) == false){
        if ($board[$y][$x-1] == $search[0]){
            return search_recur($board,substr_replace($search ,"", 0,1),$x-1,$y);
        }
    }
    if (empty($board[$y+1][$x]) == false){
        if ($board[$y+1][$x] == $search[0]){
            return search_recur($board,substr_replace($search ,"", 0,1),$x,$y+1);
        }
    }
    return false;
}
?>