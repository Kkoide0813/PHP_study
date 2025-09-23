<?php
echo "Your name?";
// $name = fgets(STDIN);
$name = trim(fgets(STDIN));
// var_dump($name); // 変数nameの属性確認
echo $name . PHP_EOL;

/* 
Taroの後にEnterキー押した分も文字数としてカウントされてしまう

% php main.php
Your name?Taro
string(5) "Taro

=> そこで不要な値を除去するためにtrimを使用

% php main.php
Your name?Taro
string(4) "Taro"

4文字で正しく表示された

% php main.php
Your name?Taro
Taro

% php main.php
Your name?Taro
Taro
% 

" */
