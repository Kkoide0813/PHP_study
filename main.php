<?php
/*  変数のスコープ＝変数の有効範囲  */


function triple($num) { // 関数の中・・・ローカルスコープ
return $num * 3;
}

function double($num) { // 関数tripleの仮引数$numとは同じ名前だが、スコープが違うので別のもの。
    return $num * 2; 
}

echo triple(10) . PHP_EOL; // 30
echo double(5) . PHP_EOL; // 10

$num = 20; // 関数の外・・・グローバルスコープ
echo $num . PHP_EOL; // 20


// $triple = fn($num) => $num * 3;
// $double = fn($num) => $num * 2;

// echo $triple(10) . PHP_EOL; // 30
// echo $double(5) . PHP_EOL; // 10