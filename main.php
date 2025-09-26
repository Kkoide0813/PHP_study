<?php
/* クラス */

class User {
    // プロパティ
    public $name;
    public $score;

    // メソッド・・・クラス内で定義する関数
    // コンストラクタ・・・newする時に実行される特殊なメソッド
    public function __construct($name, $score)
    {
        $this -> name = $name;
        $this -> score = $score;
    }
}

// インスタンス
// もっとすっきりさせる
$user1 = new User("Taro", 70);
$user2 = new User("Jiro", 90);

echo $user1 -> name . PHP_EOL;
echo $user1 -> score . PHP_EOL;
echo $user2 -> name . PHP_EOL;
echo $user2 -> score . PHP_EOL;
