<?php
/* 各スコアをそれぞれ5点プラスしたい */

/* 
条件を満たす要素だけ抽出し、新しい配列を作る方法
*/

/* 
array_filter($scores, 関数)
$scoresの各要素を関数の引数として渡して、
true として判定された要素だけを抽出して、新しい配列を作って返してくれる
*/

// 関数 50以上だけ抽出
$getOver50 = function($n){
    return $n >=50;
    // echo $n . var_dump($n >=50) . PHP_EOL;
};

$scores = [70, 90, 80, 40, 60, 10];
$filteredScores = array_filter($scores, $getOver50);
print_r($filteredScores);

// // アロー関数で省略
// $getOver50 = fn($n) => $n >= 50; // 関数

// $scores = [70, 90, 80, 40, 60, 10];
// $filteredScores = array_filter($scores, $getOver50);
// print_r($filteredScores);

// // アロー関数の中身だけ書いて省略
// $scores = [70, 90, 80, 40, 60, 10];
// $filteredScores = array_filter($scores, fn($n) => $n >= 50);

// print_r($filteredScores);