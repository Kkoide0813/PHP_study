<?php
// クラスプロパティ
class User {
    // インスタンスプロパティ・・・インスタンス変数
    public $name;
    public $score;
    // クラスプロパティ・・・クラス変数
    // インスタンスごとに値を持たせるのではなく、クラス全体で1つの値だけを管理したいので、staticとする
    public static $count = 0; // インスタンスの作成回数

    public function __construct($name, $score)
    {
        $this -> name = $name;
        $this -> score = $score;
        User::$count++; // static変数の書き方
    }
    // いくつインスタンスが作成されたかを表示


}

$count = 0;
$user1 = new User("Taro", 70);
$count++;
$user2 = new User("Jiro", 90);
$count++;

echo User::$count . PHP_EOL;