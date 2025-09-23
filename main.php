<?php
echo "Score? ";
$score = (int) fgets(STDIN);
if ($score >= 90) {
    echo "A" . PHP_EOL;
} else if ($score >=70){
    echo "B" . PHP_EOL;
} else {
    echo "C" . PHP_EOL;
}

// 上から順に判定されるため、以降は判定されないので注意



// <?php
// echo "Score? ";
// $score = (int) fgets(STDIN);

// if ($score >= 90) {
//     echo "A" . PHP_EOL;
// } else {
//     echo "Not A" . PHP_EOL;
// }

/* 

実行時

% php main.php
Score? 95
A
% php main.php
Score? 80
Not A

*/