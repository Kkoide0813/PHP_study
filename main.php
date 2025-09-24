<?php
/* 
printMessage() という関数名で、$from と $to を渡したら、それに応じたメッセージを表示してみましょう。
$to の人に向けて、$from の人から挨拶をすることを想定して、このようにしてみます。
*/

function printMessage($from, $to) {
    return $from . "さんから" . $to . "さんへのメッセージです";    
}


echo printMessage("Koide", "Tanaka") . PHP_EOL;
// $マークいらない。順序変えても正常に動作する
echo printMessage(from:"Koide", to:"Tanaka") . PHP_EOL;
echo printMessage(to:"Tanaka", from: "Koide") . PHP_EOL;