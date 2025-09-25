<?php
/*  配列の調べ方 */
$names = ["Taro","Jiro" ,"Saburo"];

// 関数in_array() 一致する文字列を検索
var_dump(in_array("Taro", $names)); // 存在する true
var_dump(in_array("shiro", $names)); // 存在しない false

// array_search() 何番目に存在するか検索
echo array_search("Jiro", $names) . PHP_EOL; // 1

