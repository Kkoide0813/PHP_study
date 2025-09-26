<?php
// クラスプロパティ
class User {

    public $name;
    public $score;
    private static $count = 0; // インスタンスの作成回数

    public function __construct($name, $score)
    {
        $this -> name = $name;
        $this -> score = $score;
        User::$count++;
    }

    // 個々のインスタンスに紐づかないように、staticメソッドにする
    public static function getUserCount(){
        return User::$count;
    }
}

$user1 = new User("Taro", 70);
$user2 = new User("Jiro", 90);

// User::$count++; // インスタンス化せずにカウントされてしまう。クラス外でカウントできないようにする。
// echo User::$count . PHP_EOL; // $countをprivateにするとこっちもエラーが出てしまう。getterを設定する

echo User::getUserCount() . PHP_EOL; // staticメソッドの呼び出し方