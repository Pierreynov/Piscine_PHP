<?php
function calc(string $op): int{
    return eval("return $op;");
}
?>