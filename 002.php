<?php

/**
 * @link https://www.phpexam.jp/archives/3102
 */

/**
 * bool型
 * @link https://www.php.net/manual/ja/language.types.boolean.php
 */

// trueとfalseの定数は「大文字小文字を区別しない」
$bool_1 = true;
$bool_2 = True;
$bool_3 = TRUE;

if ($bool_1 === $bool_2 && $bool_2 === $bool_3 && $bool_1 === $bool_3) {
    var_dump('全て同じ扱い' . PHP_EOL);
}

/**
 * int型
 */

 // int型で扱える範囲は以下で確認できる。サイズはプラットフォームに依存する
var_dump(PHP_INT_SIZE, PHP_INT_MAX, PHP_INT_MIN);

// int型で扱える範囲を超えた時、型がfloat(double)になる
$int = PHP_INT_MAX + 1;
var_dump(gettype($int));

// 整数リテラルの桁の間にアンダースコアを含めることができる
// 例えば売上が1000万円を表現する場合、10_000_000と書いたほうが修正する時や確認する時分かりやすい
$uriage = 10_000_000;
var_dump($uriage);

/**
 * 浮動小数点 float(double)
 * @link https://www.php.net/manual/ja/language.types.float.php
 */

// これはfalseになる
// 10進数で有限の少数でも2進数では無限の小数となる場合がある。
// 0.1を2進数に例としてすると、0.00011001100110011001100110011...と無限になる。コンピューターはこれを丸めて近似値にする。
// 例）
// 0.1 の近似値（例えば 0.10000000000000000555
// 0.2 の近似値（例えば 0.2000000000000000111）
// 足すと0.3000000000000000444になり、値が一致しない。
$float_type_variable_1 = 0.1 + 0.2;
$float_type_variable_2 = 0.3;
var_dump($float_type_variable_1 === $float_type_variable_2);

// 拡張モジュールを使用しない場合
$float_1 = 0.1 + 0.2;
$float_2 = 0.3;
$epsilon = 0.00001; // 許容する誤差

if (abs($float_1 - $float_2 ) < $epsilon) {
    echo "等しい！";
} else {
    echo "等しくない！";
}

// BCMath拡張モジュールを使用した場合
$float_1 = 0.1;
$float_2 = 0.2;
$float_3 = 0.3;
$sum = bcadd((string)$float_1, (string)$float_2, 1); // 小数第1位まで計算
if ($sum === (string)$float_3) {
    echo '等しい！';
} else {
    echo '等しくない！';
}

