<?php
$hour = date("H");
if ($hour > 6 and $hour <=12){
    echo "Hello! Have a nice day :)\n";
}elseif ($hour > 12 and $hour <= 18){
    echo "Have a good afternoon !\n";
}elseif ($hour > 18 and $hour <=21){
    echo "Good evening! Hope you had a good day!\n";
}else {
    echo "Good night! See you tomorrow :)\n";
}
?>