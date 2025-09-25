<?php
/* 配列の要素を変数に代入 */
$scores = [70, 90, 80];

$firstScore = $scores[0];
$secondScore = $scores[1];
$thirdScore = $scores[2];

// 冗長な書き方
echo $firstScore . PHP_EOL;
echo $secondScore . PHP_EOL;
echo $thirdScore . PHP_EOL;

// 別の書き方
list($firstScore, $secondScore, $thirdScore) = $scores; // list()内の変数にそれぞれ代入できる
echo $firstScore . PHP_EOL;
echo $secondScore . PHP_EOL;
echo $thirdScore . PHP_EOL;

// 別の書き方
[$firstScore, $secondScore, $thirdScore] = $scores; // [ ]は配列ではない
echo $firstScore . PHP_EOL;
echo $secondScore . PHP_EOL;
echo $thirdScore . PHP_EOL;

