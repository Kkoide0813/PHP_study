<?php
function sum($a, $b) {
    return $a + $b;
}

function printSum($a, $b) {
    echo $a + $b . PHP_EOL;
}

echo sum(3, 7) . PHP_EOL;
printSum(10, 3);

/* 
実行時

% php main.php
10
13

*/