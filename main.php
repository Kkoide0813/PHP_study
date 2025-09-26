<?php
// 点数に応じた判定結果を表示させる
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
    private function getResult(){
        return $this->points >= 80 ? "Pass" : "Fail" ;
    }

    public function getInfo(){
        return "{$this->subject},{$this->points},{$this->getResult()}";
    }
}

$user1 = new User("Taro", new Score("Math", 70));
$user2 = new User("Jiro", new Score("Engllish", 90));

echo $user1->getInfo() . PHP_EOL;
echo $user2->getInfo() . PHP_EOL;
