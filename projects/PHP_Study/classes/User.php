<?php
class User
{
    private String $name;
    private Score $score; // 親クラスを指定すればOK

    public function __construct(string $name, Score $score) 
    {
        $this->name = $name;
        $this->score = $score;
    }

    public function getInfo():string
    {
        return "{$this->name},{$this->score->getInfo()}"; // $score = new Score("Math", 70) なので、Score型のオブジェクト
    }
}