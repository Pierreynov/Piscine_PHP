<?php 
echo "2";
for ($nbr = 3; $nbr <100; $nbr ++){
    $test = true;
    for ($nb = 2; $nb <$nbr; $nb ++){
        if ($nbr % $nb == 0){
            $test = false;
            break;
        }               
    }
    if ($test == true)echo ", $nbr";  
}
?>