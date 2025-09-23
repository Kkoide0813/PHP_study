<?php
// do while文を使う 最初に必ず処理が実行される

/*  今回パスワードを入力してもらって、間違えていたら入力し直してもらうという処理を書きたかったとします。 */

$i = 0; // 試行回数

do {
    echo "passwordは？";
    $password = (int)fgets(STDIN); // パスワード
    $i++;

    if ($password !==1234 && $i <= 3) {
    echo "パスワードが違います。再度入力してください。";
    }

} while ($password !== 1234  && $i < 3);
if ($password === 1234) {
    echo "password matched" . PHP_EOL;
} else {
    echo "3回間違えました。終了します。" . PHP_EOL;
}


/* 

実行時
% php main.php
passwordは？1111
パスワードが違います。再度入力してください。passwordは？1111
パスワードが違います。再度入力してください。passwordは？1111
パスワードが違います。再度入力してください。3回間違えました。終了します。
%    

*/