<?php
echo "Signal? ";
$signal = trim(fgets(STDIN));

switch ($signal) {
    case "red":
        echo "stop" . PHP_EOL;
        break;
    case "green":
        echo "go" . PHP_EOL;
        break;
    case "yellow":
        echo "slow down" . PHP_EOL;
        break;
    // どれにも当てはまらない時
    default:
        echo "wrong signal" . PHP_EOL;
        break;
}


/* 

実行時


koidekeiji@koidemegumitsugunoMacBook-Air htdocs % php main.php                                                                   
Signal? red
stop
koidekeiji@koidemegumitsugunoMacBook-Air htdocs % php main.php
Signal? green
go
koidekeiji@koidemegumitsugunoMacBook-Air htdocs % php main.php
Signal? yellow
slow down
koidekeiji@koidemegumitsugunoMacBook-Air htdocs % php main.php
Signal? aaa
wrong signal
% 

*/