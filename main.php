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

    public function getInfo(){
        return "{$this -> name}, {$this -> score}";
    }

    // setScoreメソッドの作成
    public function setScore($score){
        if($score >=0 && $score <=100 ){
            $this->score = $score;
        } else {
            echo "Invalid score!" . PHP_EOL; // 更新せずリターン
            return;
        }
    }
}

// インスタンス
$user1 = new User("Taro", 70);
$user2 = new User("Jiro", 90);

// $user1->score = 900; // 直接プロパティの値が更新できてしまうのは良くない。
// /*
// Taro, 900
// Jiro, 90
// */

// setScore()というメソッドを介してプロパティにアクセスする
$user1->setScore(900);
$user1->setScore(60);

echo $user1->getInfo() . PHP_EOL;
echo $user2->getInfo() . PHP_EOL;
