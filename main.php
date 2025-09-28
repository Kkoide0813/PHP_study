<?php

/* 
インターフェース
・継承関係のない任意のクラスに対して処理を強制できる
・チーム開発の際に実装漏れを防ぐことができる
*/

// 先頭は大文字 ~ableという名前をつけることが多い
interface Loggable{
    public function log(); // 抽象メソッド
}


abstract class Score implements Loggable{  // implements インターフェース名
    private $subject;
    protected $points;
    
    public function __construct($subject, $points)
    {
        $this->subject = $subject;
        $this->points = $points;
        $this->log(); // インスタンス生成時にlog()が呼ばれる
    }

    // メッセージを表示する処理
    public function log(){ // 抽象メソッドの中身
        echo "Instance created: {$this->subject}" . PHP_EOL;
    }

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

class User implements Loggable{
    
    private $name;
    private $score;
    
    public function __construct($name, $score)
    {
        $this -> name = $name;
        $this -> score = $score;
        $this -> log();
    }

    // メッセージを表示する処理
    public function log()
    { // 抽象メソッドの中身
        echo "Instance created: {$this->name}" . PHP_EOL;
    }

    public function getInfo(){
        return "{$this->name},{$this->score->getInfo()}"; // $score = new Score("Math", 70) なので、Score型のオブジェクト
    }
    
}

$user1 = new User("Taro", new MathScore(70));
$user2 = new User("Jiro", new EnglishScore(90));

echo $user1->getInfo() . PHP_EOL;
echo $user2->getInfo() . PHP_EOL;

/* 
Instance created: Math
Instance created: Taro
Instance created: English
Instance created: Jiro
MathScore method
Taro,Math,70,Pass
EnglishScore method
Jiro,English,90,Fail
*/