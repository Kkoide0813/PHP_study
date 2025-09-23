<?php
// あらかじめ用意された関数 => ビルトイン関数
// ユーザーが定義する関数 => ユーザー定義関数 

function triple($num) { // 仮引数 param
    return $num * 3;
}

echo triple(10) . PHP_EOL; // 実引数 args
echo triple(4) * 3 . PHP_EOL; 



/* 
実行時

% php main.php                                                                    
30
36

*/