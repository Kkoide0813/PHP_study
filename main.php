<?php
echo "Your name" . PHP_EOL;
$name = fgets(STDIN);
echo "私の名前は{$name}です" . PHP_EOL;

/* ユーザーに文字列を入力し、変数で受け取ることができる　standard input 標準入力の略
標準入力はターミナルで使用すると使える。VScodeのコンソールではxdebugのせいで使えない。
% php main.php
Your name
小出
私の名前は小出
です */