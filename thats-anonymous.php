<?php
$month = date("M");
$day = date("d");
$year = date("Y");
$today = function () use (&$month, &$day, &$year): string{
    return "It is $month $day, $year";
};

$isLeapYear = function ($year): bool {
    if ((0 == $year % 4) && (0 != $year % 100) || (0 == $year % 400)){
        return true;
    }
    else return false;
}
?>