<?php
/* 商品の税込合計金額を計算する getTotal ()という関数を作る
引数で単価、数量、税率という意味で仮引数を設定して、合計金額としてそれらを掛け合わせたものを返す

追加：合計100個以上だったら、税金分を無料にする
*/


// デフォルトでrateを1.1にする
function getTotal($price, $amount, $rate = 1.1) { // デフォルト値を設定する変数は一番後ろにしないとエラーになる
    // 合計100個以上だったら、税金分を無料
    if ($amount >= 100) {
        return $price * $amount;
    }else {
        return $price * $amount * $rate;
    }
}

echo getTotal(1000, 3) . PHP_EOL;
echo getTotal(500, 2) . PHP_EOL;
echo getTotal(200, 30, 1.08) . PHP_EOL;
echo getTotal(200, 100, 1.08) . PHP_EOL;
echo getTotal(200, 100) . PHP_EOL;

/* 
実行時

*/