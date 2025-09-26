<?php
// クラスの継承 ScoreクラスをMathScore, EnglishScoreクラスに分ける
// アクセス修飾子protected 継承関係にある子クラスでも使えるようにする
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

class Score {

    private $subject;
    private $points;

    public function __construct($subject, $points)
    {
        $this->subject = $subject;
        $this->points = $points;
    }
    private function getResult(){ // 点数による判定
        return $this->points >= 80 ? "Pass" : "Fail" ;
    }

    public function getInfo(){ // 科目, 点数, 点数による判定
        return "{$this->subject},{$this->points},{$this->getResult()}";
    }
}

class MathScore extends Score{
    public function __construct($points)
    {
        parent::__construct("Math", $points); // 親クラスのメソッドは parent::メソッド名() で繋げられる
    }
}

class EnglishScore extends Score{
    public function __construct($points)
    {
        parent::__construct("English", $points);
    }
}


$user1 = new User("Taro", new MathScore(70));
$user2 = new User("Jiro", new EnglishScore(90));

echo $user1->getInfo() . PHP_EOL;
echo $user2->getInfo() . PHP_EOL;
