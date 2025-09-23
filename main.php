<?php
// 真偽値 true か false
$isLoggedIn = false; // 真偽値
if ($isLoggedIn) {
    echo "User logged in" . PHP_EOL; // true
} else {
    echo "User not logged in" . PHP_EOL; // false
}

$isLoggedIn = "yes"; // 文字列→true
if ($isLoggedIn) {
    echo "User logged in" . PHP_EOL; // true
} else {
    echo "User not logged in" . PHP_EOL; // false
}


$isLoggedIn = ""; // 0, ""などはfalse
if ($isLoggedIn) {
    echo "User logged in" . PHP_EOL; // true
} else {
    echo "User not logged in" . PHP_EOL; // false
}

/* 
実行時

% php main.php
User not logged in
User logged in
User not logged in

*/