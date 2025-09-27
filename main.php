<?php

class User {
    
    private $name;
    private $score;
    
    public function __construct($name, $score)
    {
        $this -> name = $name;
        $this -> score = $score;
    }
    
    public function getInfo(){
        return "{$this->name},{$this->score->getInfo()}"; // $score = new Score("Math", 70) なので、Score型のオブジェクト
    }
    
}

/* 
abstract
小クラス側で上書き（オーバーライド）されることを前提としたメソッドであることを明示する
*/
abstract class Score { // abstractをつける
    
    private $subject;
    protected $points;

    public function __construct($subject, $points)
    {
        $this->subject = $subject;
        $this->points = $points;
    }
    // 抽象メソッドと呼ぶ。abstractをつけることで小クラス側で実装してねという意味 インスタンスは作れない
    abstract protected function getResult(); 

    public function getInfo(){ // 科目, 点数, 点数による判定
        return "{$this->subject},{$this->points},{$this->getResult()}";
    }
}

class MathScore extends Score{
    public function __construct($points)
    {
        parent::__construct("Math", $points); // 親クラスのメソッドは parent::メソッド名() で繋げられる
    }

    protected function getResult() // 点数による判定
    {
        echo "MathScore method" . PHP_EOL;
        return $this->points >= 50 ? "Pass" : "Fail"; 
    }
}

class EnglishScore extends Score{
    public function __construct($points)
    {
        parent::__construct("English", $points);
    }

    protected function getResult() // 点数による判定
    {
        echo "EnglishScore method" . PHP_EOL; // 小クラスのメソッドが優先されたか確認
        return $this->points >= 95 ? "Pass" : "Fail";
    }
}


$user1 = new User("Taro", new MathScore(70));
$user2 = new User("Jiro", new EnglishScore(90));

echo $user1->getInfo() . PHP_EOL;
echo $user2->getInfo() . PHP_EOL;

/* 

オーバーライドできてることが確認

MathScore method
Taro,Math,70,Pass
EnglishScore method
Jiro,English,90,Fail

*/