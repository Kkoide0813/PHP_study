<?php
echo "Your name? => ";
$name = trim(fgets(STDIN));
// 文字列の連結
echo "Hello {$name}" . PHP_EOL; 
echo "Hello " . $name . PHP_EOL;

/* 
実行時

% php main.php
Your name? => Taro
Hello Taro
Hello Taro

*/
