<?php
// 科目を増やす
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

    public function getInfo(){
        return "{$this->subject},{$this->points}";
    }
}

$user1 = new User("Taro", new Score("Math", 70));
$user2 = new User("Jiro", new Score("Engllish", 90));

echo $user1->getInfo() . PHP_EOL;
echo $user2->getInfo() . PHP_EOL;
