<?php
/* 配列の並び替え sort(), rsort(), asort(), array_reverse() */
$scores = [70, 90, 80];

// echo "配列の並べ替え 小さい順 sort()" . PHP_EOL;
// sort($scores); 
// print_r($scores);

// echo "配列の並べ替え 大きい順 rsort()" . PHP_EOL;
// rsort($scores);
// print_r($scores);

// echo "元の配列のキーを維持したまま並び替え asort()" . PHP_EOL;
// asort($scores);
// print_r($scores);

// echo " シャッフル shuffle()" . PHP_EOL; // 実行されるたびにシャッフルされる
// shuffle($scores);
// print_r($scores);

echo " 要素を逆順に並べ替え array_reverse()" . PHP_EOL;

array_reverse($scores); // array_reverse()元の配列をそのままの状態で、”戻り値で”逆にした新たな配列を返す
print_r(array_reverse($scores));
// $reversed = array_reverse($scores); // 変数に代入してリファクタリング
// print_r($reversed);


// array_reverse($scores); // これだと元の配列がそのまま出力される
// print_r($scores);