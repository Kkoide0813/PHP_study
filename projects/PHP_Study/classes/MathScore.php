<?php
class MathScore extends Score
{
    public function __construct($points)
    {
        parent::__construct("Math", $points);
    }

    protected function getResult() // 点数による判定
    {
        return $this->points >= 50 ? "Pass" : "Fail";
    }
}
