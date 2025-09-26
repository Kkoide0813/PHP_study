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

class Score {

    private $subject;
    protected $points;

    public function __construct($subject, $points)
    {
        $this->subject = $subject;
        $this->points = $points;
    }
    protected function getResult(){ // 点数による判定
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

    // 子クラスの方で親クラスと同じ名前のメソッドを上書きすることを「メソッドのオーバーライド」と呼びます。
    protected function getResult() // 点数による判定
    {
        echo "MathScore method" . PHP_EOL; // 小クラスのメソッドが優先されたか確認
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