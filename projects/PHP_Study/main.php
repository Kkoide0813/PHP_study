<?php
require 'classes/Score.php';
require 'classes/MathScore.php';
require 'classes/EnglishScore.php';
require 'classes/User.php';


// わざと重複したクラス名を用意
class User{
    
}

// // 名前空間で呼び出してるので、エラーにならない
// $user1 = new Dotinstall\MyApp\User("Taro", new MathScore(70));
// $user2 = new Dotinstall\MyApp\User("Jiro", new EnglishScore(90));

use Dotinstall\MyApp; // 名前空間をMyAppだけで呼び出すことができる
$user1 = new MyApp\User("Taro", new MathScore(70));
$user2 = new MyApp\User("Jiro", new EnglishScore(90));

echo $user1->getInfo() . PHP_EOL;
echo $user2->getInfo() . PHP_EOL;

/* 
Taro,Math,70,Pass
Jiro,English,90,Fail
*/