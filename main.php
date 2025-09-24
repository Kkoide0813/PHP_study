<?php

/* 無名関数（クロージャー）, アロー関数 */

// function triple($num) {
//     return $num * 3;
// }

// // 実引数
// echo triple(10) . PHP_EOL;

// ============================

// 無名関数という記法 関数名をそのまま変数として扱うことができる
$triple = function($num) {
    return $num * 3;
}; // 無名関数＝クロージャーでは末尾にセミコロン ; が必要

// 実引数
echo $triple(10) . PHP_EOL;

// ============================
// アロー関数 無名関数をさらに省略して書くことが可能
// 書き方・・・無名関数 => 戻り値
$triple = fn ($num) => $num * 3;

// 実引数
echo $triple(10) . PHP_EOL;
