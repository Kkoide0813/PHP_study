<?php
/* array_spliceの使い方 任意の位置で配列を操作する方法 */
// array_splice($配列, $開始位置, $削除する要素の数 , $置き換える要素を含んだ配列 );


$scores = [70, 90, 80];
array_splice($scores, 1, 0, [30, 20]);   // 70, 30, 20, 90, 80
array_splice($scores, 2, 1);             // 70, 30, 90, 80
$removedItems = array_splice($scores, 1, 1, [10, 15]);   // 70, 10, 15, 90, 80

print_r($scores); // 70, 10, 15, 90, 80
print_r($removedItems); // 30 array_splice関数は削除された値を戻り値として返す


// 配列の指定のインデックスの要素を削除

// 配列の指定のインデックスに要素を追加
