<?php
/* 商品の税込合計金額を計算する getTotal ()という関数を作る
引数で単価、数量、税率という意味で仮引数を設定して、合計金額としてそれらを掛け合わせたものを返す */

// デフォルトでrateを1.1にする
function getTotal($price, $amount, $rate = 1.1) { // デフォルト値を設定する変数は一番後ろにしないとエラーになる
    return $price * $amount * $rate;
}

echo getTotal(1000, 3) . PHP_EOL;
echo getTotal(500, 2) . PHP_EOL;
echo getTotal(200, 30, 1.08) . PHP_EOL;

/* 
実行時

% php main.php
3300
1100
6480

*/