<?php
/* 配列の要素を変数に代入_2 foreach(配列変数 as 変数) */
$scores = [70, 80, 90];
// foreach($scores as $value) {
//     echo "Score: {$value}" . PHP_EOL; 
// }

/* 
Score: 70
Score: 80
Score: 90
*/

foreach($scores as $key => $value) { // 値だけでなく、キーも取り出す方法
    echo "Score[{$key}]: {$value}" . PHP_EOL;
}

/* 
Score[0]: 70
Score[1]: 80
Score[2]: 90
*/