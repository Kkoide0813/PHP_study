<?php
/*  データ構造編   */
$scores = [70, 90, 80];
echo $scores[0] . PHP_EOL; // 70

// 値の上書き
$scores[1] = 95;
echo $scores[1] . PHP_EOL; // 95

// 全ての値を表示
print_r($scores) . PHP_EOL; // var_dumpより見やすい
/* 
Array
(
    [0] => 70
    [1] => 95
    [2] => 80
)
*/

// var_dump($scores) . PHP_EOL;
/* 

見づらい

array(3) {
  [0]=>
  int(70)
  [1]=>
  int(95)
  [2]=>
  int(80)
}
*/