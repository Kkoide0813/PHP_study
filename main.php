<?php
echo "Signal? ";
$signal = trim(fgets(STDIN));

if($signal === "red"){
    echo "Stop" . PHP_EOL;
} else if ($signal === "green"){
    echo "Go" . PHP_EOL;
} else if ($signal === "yellow"){
    echo "Slow down" . PHP_EOL;
} else {
    echo "Wrong signal" . PHP_EOL;
}


/* 

実行時

% php main.php 
Signal? green
Go
% php main.php
Signal? yellow
Slow down
% php main.php
Signal? red
Stop
% php main.php
Signal? blue
Wrong signal
% 

*/