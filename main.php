<?php
/*  配列の調べ方 */
$scores = [70, 90, 80];

echo count($scores) . PHP_EOL; // 要素数 3
echo max($scores) . PHP_EOL; // 最大値 90
echo min($scores) . PHP_EOL; // 最小値 70
echo array_sum($scores) . PHP_EOL; // 合計値 240

echo array_sum($scores) / count($scores) . PHP_EOL; // 平均 80