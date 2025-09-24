<?php
/*  union型  */

// 厳格な型付け
declare(strict_types=1);

// 商品idを渡すと、P-商品idという商品コードをかえす処理
function getProductCode(int|string $id): string // 仮引数をint,string両方受け取れる書き方＝union型と呼ぶ
{
    return "P-{$id}";
}

echo getProductCode(80) . PHP_EOL;
echo getProductCode("banana") . PHP_EOL;
