<?php
/**
 * @link https://www.phpexam.jp/archives/3215
 * @link https://www.php.net/manual/ja/functions.arguments.php
 */

/**
 * 可変長引数リスト
 */
function sum(...$numbers) {
    $acc = 0;
    foreach ($numbers as $n) {
        $acc += $n;
    }
    return $acc;
}

echo sum(1, 2, 3, 4);
