<?php
function sum($a, $b) {
    return $a + $b;
}

function printSum($a, $b) {
    echo $a + $b . PHP_EOL;
    // return Null; が省略されている
}

// 呼び出し元
echo sum(3, 7) . PHP_EOL;
var_dump(printSum(10, 3));

/* 
実行時

% php main.php                                                                       
10
13
NULL

*/