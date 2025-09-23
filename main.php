<?php
// 三項演算子 スコアが80以上ならA,それ以外はB
echo "Score?";
$score = (int) fgets(STDIN);
$result = $score > 80 ? "A" : "B" ;
echo $result . PHP_EOL;


/* 

実行時
% php main.php                                                                                            
Score?80
B
% php main.php
Score?90
A

*/