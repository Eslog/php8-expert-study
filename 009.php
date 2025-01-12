<?php
/**
 * @link https://www.phpexam.jp/archives/3230
 * @link https://www.php.net/manual/ja/language.operators.php
 */

/**
 * 宇宙船演算子
 * 左辺が右辺より大きい場合は1
 * 左辺が右辺より小さい場合は-1
 * 左辺と右辺が等しい場合は0
 */

 $array = [
    10,
    1,
    5,
    6,
    2,
];

// これは昇順になる
usort($array, function ($a, $b) {
    return $a <=> $b;
});

var_dump($array);
