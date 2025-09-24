<?php

/* 可読性・保守性の悪い以下のコードを関数でまとめる */
// 広告
echo "---------" . PHP_EOL;
echo "SALE! 50% OFF!" . PHP_EOL;
echo "---------" . PHP_EOL;
// 本文
echo "BREAKING NEWS!" . PHP_EOL;
echo "Two baby pandas born at our Zoo!" . PHP_EOL;
// 広告
echo "---------" . PHP_EOL;
echo "SALE! 50% OFF!" . PHP_EOL;
echo "---------" . PHP_EOL;



// 広告
function showAd() { // 「ad」は、英語の略語で「advertisement（広告）｣
    echo "---------" . PHP_EOL;
    echo "SALE! 50% OFF!" . PHP_EOL;
    echo "---------" . PHP_EOL;
}

// 本文
function showContent() {
    echo "BREAKING NEWS!" . PHP_EOL;
    echo "Two baby pandas born at our Zoo!" . PHP_EOL;
}

showAd(); // 広告
showContent(); // 本文
showAd(); // 広告

/* 

---------
SALE! 50% OFF!
---------
BREAKING NEWS!
Two baby pandas born at our Zoo!
---------
SALE! 50% OFF!
---------

*/