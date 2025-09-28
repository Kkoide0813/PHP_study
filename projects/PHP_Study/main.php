<?php
declare(strict_types=1);
require 'classes/Score.php';
require 'classes/MathScore.php';
require 'classes/EnglishScore.php';
require 'classes/User.php';

// $user1 = new User("Taro", new MathScore(70));
$user1 = new User(100, new MathScore(70)); // あえてint型で渡してみるとエラーが出る
$user2 = new User("Jiro", new EnglishScore(90));

echo $user1->getInfo() . PHP_EOL;
echo $user2->getInfo() . PHP_EOL;

/* 
PHP Fatal error:  Uncaught TypeError: User::__construct(): Argument #1 ($name) must be of type string, int given, called in /Applications/MAMP/htdocs/projects/PHP_Study/main.php on line 9 and defined in /Applications/MAMP/htdocs/projects/PHP_Study/classes/User.php:7
*/