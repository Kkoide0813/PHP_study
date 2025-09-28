<?php
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