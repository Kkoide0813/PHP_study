<?php
class User {
    public $name;
    private $score;

    public function __construct($name, $score)
    {
        $this -> name = $name;
        $this -> score = $score;
    }

    public function getInfo(){
        return "{$this -> name}, {$this -> score}, {$this -> getResult()}";
    }

    private function getResult(){
        if($this->score >=80){
            return "Pass";
        } else {
            return "Fail";
        }
    }
}

// インスタンス
$user1 = new User("Taro", 70);
$user2 = new User("Jiro", 90);

echo $user1->getInfo() . PHP_EOL;
echo $user2->getInfo() . PHP_EOL;
// echo $user1->getResult() . PHP_EOL; // クラス外なので、エラー
// echo $user2->getResult() . PHP_EOL; // クラス外なので、エラー
