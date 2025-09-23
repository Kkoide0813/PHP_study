<?php
// 論理演算子 英語が 80 点以上、なおかつ数学が 80 点以上だったら A 判定
echo "English?";
$english = (int)fgets(STDIN);
echo "Math?";
$math = (int)fgets(STDIN);

// 読みづらい
// if ($english >= 80) {
//     if ($math >= 80) {
//         echo "A" . PHP_EOL;
//     }
// } else echo "失格";

if ($english >= 80 && $math >=80) { // && アンパサンド
    echo "A";
} else {
    echo "B";
}


/* 
実行時
*/