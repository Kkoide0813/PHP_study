<?php
// コンソール => PHP_EOLと"\n"は同じ
// ブラウザ上 => "<br />"
echo 10 . "\n";
echo -8 . PHP_EOL;
echo 2.5 . PHP_EOL;
echo 1000000 . PHP_EOL;
echo 1_000_000 . PHP_EOL;
echo 1.2e-3 . PHP_EOL;
echo 1.2e3 . PHP_EOL;
?>