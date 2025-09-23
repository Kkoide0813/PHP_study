<?php
echo "価格はいくら? => ";
$price = (int) fgets(STDIN);
echo "税込" . $price * 1.1 . "円です" . PHP_EOL; // 文字列の連結と試してみる
// var_dump($price);

/* 

実行時
% php main.php
価格はいくら? => 100
税込110円です

*/



/* 
==========================
echo "Price? ";
$price = trim(fgets(STDIN));
var_dump($price);

実行時

% php main.php 
Price? 100
string(3) "100" // 文字列型になっている

==========================

<?php
echo "Price? ";
$price = (int) fgets(STDIN); // int型に変換
var_dump($price);

実行時

% php main.php
Price? 100
int(100) // 正しく変換された int型はtrimなくても最後の改行は除去される

*/
