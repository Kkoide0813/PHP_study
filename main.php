<?php
// /* キーが文字列の配列 */
$scores = ["english" => 70, "math" => 80];
$scores["math"] = 90;
echo $scores["math"] . PHP_EOL;

$scores["history"] = 50;
print_r ($scores);

/* キーに対する処理 */
$scores = ["english" => 70, "math" => 80, "history" =>50];
print_r(array_keys($scores)); // キーだけを抽出する方法
print_r(array_values($scores)); // 要素だけを抽出する方法


var_dump(array_key_exists("english", $scores)); // キーにenglishが含まれているか検索 戻り値はtrue,false
// var_dump(in_array("english", $scores)); // in_arrayはキーではなく、要素の検索に使うためfalseになる

// キーを元に並べ替え 
ksort($scores);
print_r($scores);

krsort($scores);
print_r($scores);