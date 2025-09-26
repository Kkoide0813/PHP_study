<?php
/* クラス */

class User {
    // プロパティ アクセス修飾子
    public $name;
    private $score; // クラス外からアクセスできないようにする

    // メソッド・・・クラス内で定義する関数
    // コンストラクタ・・・newする時に実行される特殊なメソッド
    public function __construct($name, $score)
    {
        $this -> name = $name;
        $this -> score = $score;
    }

    public function getInfo(){
        return "{$this -> name}, {$this -> score}";
    }

    // setter
    public function setScore($score){
        if($score >=0 && $score <=100 ){
            $this->score = $score;
        } else {
            echo "Invalid score!" . PHP_EOL; // 更新せずリターン
            return;
        }
    }

    // getter
    public function getScore(){
        return $this->score;
    }
}

// インスタンス
$user1 = new User("Taro", 70);
$user2 = new User("Jiro", 90);

// $user1->score = 900; // クラス外からアクセスしてみる
// /* 
// privateのプロパティにはアクセスできませんというエラーが出る
// PHP Fatal error:  Uncaught Error: Cannot access private property User::$score in /Applications/MAMP/htdocs/main.php:36
// */


// echo $user1->score . PHP_EOL; // scoreはprivateなので、取得もできない
$user1->setScore(60);

echo $user1->getScore() . PHP_EOL;
echo $user1->getInfo() . PHP_EOL;
echo $user2->getInfo() . PHP_EOL;
