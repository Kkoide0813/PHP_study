<?php
/* クラス */

class User {
    // プロパティ
    public $name;
    public $score;
}

// インスタンス
$user1 = new User();
$user1 -> name = "Taro";
$user1 -> score = 70;
$user2 = new User();
$user2 -> name = "Jiro";
$user2 -> score = 90;

echo $user1 -> name . PHP_EOL;
echo $user1 -> score . PHP_EOL;
echo $user2 -> name . PHP_EOL;
echo $user2 -> score . PHP_EOL;
