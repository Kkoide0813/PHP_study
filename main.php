<?php
/* 各スコアをそれぞれ5点プラスしたい */

/* 
foreachで空の配列に入れる方法
*/ 

$scores = [70, 80, 90];
$updatedScores = [];

foreach($scores as $value){
    $updatedScores[] = $value + 5; // 配列の末尾に追加する書き方
}

print_r($updatedScores);

// =======================================================

/* 
array_map(関数, $scores) を使う方法
*/

// 関数addFiveを変数$addFiveとして呼び出したいので、呼び出し元は無名関数を使わないといけない。
$scores = [70, 80, 90];
$addFive = function($n){
        return $n + 5;
    };

$updatedScores = array_map($addFive, $scores);
print_r($updatedScores);

// =======================================================
//もっと短くアロー関数で書くことも可能
$addFive = fn($n) => $n + 5;
$scores = [70, 80, 90];

// $updatedScores = array_map($addFive, $scores);
$updatedScores = array_map(fn($n) => $n + 5, $scores); // アロー関数の処理を直接書いた場合
print_r($updatedScores);