<?php
// クラスごとにファイルを分けてmain.phpから実行する
/* 
└── projects
    └── PHP_Study
        ├── classes
        │   ├── EnglishScore.php
        │   ├── MathScore.php
        │   ├── Score.php
        │   └── User.php
        ├── main.php
        └── README.md
*/
require 'classes/Score.php';
require 'classes/MathScore.php';
require 'classes/EnglishScore.php';
require 'classes/User.php';

$user1 = new User("Taro", new MathScore(70));
$user2 = new User("Jiro", new EnglishScore(90));

echo $user1->getInfo() . PHP_EOL;
echo $user2->getInfo() . PHP_EOL;

/* 
Taro,Math,70,Pass
Jiro,English,90,Fail
*/