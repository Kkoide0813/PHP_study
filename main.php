<?php
/*  関数の型付け  */

// 厳格な型付けをする場合に書く
// これを書くと、型エラーが見つかりやすくなる
declare(strict_types=1);

// 返り値の型もコロンの後に指定できる。returnがない場合はvoidとする。
function printInfo(string $name, int $score): void 
{
    echo var_dump($name, $score) . PHP_EOL; 
    echo "{$name} : {$score}" . PHP_EOL;
}

printInfo("taro", 40); // string, int
printInfo("taro", "jiro"); // おそらく型エラーになる

/* 

実行結果
% php main.php
string(4) "taro"
int(40)

taro : 40
やはり、型エラーが発生。
引数2のscoreがintじゃないといけないのに、stringが与えられていると出ている。
PHP Fatal error:  Uncaught TypeError: printInfo(): Argument #2 ($score) must be of type int, string given, called in /Applications/MAMP/htdocs/main.php on line 9 and defined in /Applications/MAMP/htdocs/main.php:3

*/


// function printInfo($name, $score) {
//     echo var_dump($name, $score) . PHP_EOL; 
//     echo "{$name} : {$score}" . PHP_EOL;
// }

// printInfo("taro", 40); // string, int
// printInfo("taro", "jiro"); // string, string

/* 
実行結果

echo var_dump($name, $score) . PHP_EOL; 
string(4) "taro" // name
int(40).         // score

echo "{$name} : {$score}" . PHP_EOL;
taro : 40

echo var_dump($name, $score) . PHP_EOL; 
string(4) "taro" // name
string(4) "jiro" // score  => string型に勝手に型付けされている。

echo "{$name} : {$score}" . PHP_EOL;
taro : jiro 

*/
