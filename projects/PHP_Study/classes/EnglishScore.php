<?php
class EnglishScore extends Score
{
    public function __construct($points)
    {
        parent::__construct("English", $points);
    }

    protected function getResult() // 点数による判定
    {
        return $this->points >= 95 ? "Pass" : "Fail";
    }
}
