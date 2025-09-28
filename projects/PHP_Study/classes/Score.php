<?php
abstract class Score
{
    private $subject;
    protected $points;

    public function __construct($subject, $points)
    {
        $this->subject = $subject;
        $this->points = $points;
    }

    abstract protected function getResult();

    public function getInfo()
    { // 科目, 点数, 点数による判定
        return "{$this->subject},{$this->points},{$this->getResult()}";
    }
}

