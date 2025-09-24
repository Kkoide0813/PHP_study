<?php
/*  ?を使った型付け  */

// 厳格な型付け
declare(strict_types=1);

// 商品idを渡すと、P-商品idという商品コードをかえす処理
function getProductCode(int $id): ?string // NULL|string の簡略記法
// function getProductCode(int $id): NULL|string
{
    // idが100以上ならNULLを返す
    if($id >= 100) {
        return var_dump(NULL);
    }
    return "P-{$id}";
}

echo getProductCode(80) . PHP_EOL; // 商品コードを返す
echo getProductCode(100) . PHP_EOL; // NULL
