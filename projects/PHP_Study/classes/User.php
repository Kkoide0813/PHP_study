<?php
// クラス名の重複を避けるために名前空間で呼び出す
namespace Dotinstall\MyApp;

class User
{
    private $name;
    private $score;

    public function __construct($name, $score)
    {
        $this->name = $name;
        $this->score = $score;
    }

    public function getInfo()
    {
        return "{$this->name},{$this->score->getInfo()}"; // $score = new Score("Math", 70) なので、Score型のオブジェクト
    }
}