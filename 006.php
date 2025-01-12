<?php
declare(strict_types=1);
error_reporting(-1);

/**
 * @link https://www.phpexam.jp/archives/3224
 */

/**
 * 変数のスコープ
 */

$global_value = 'global';

global $global_value;

function func1()
{
    // 関数外でglobalを宣言しても使えない
    // Warning: Undefined variable $global_value
    echo $global_value;
}
func1();

function func2()
{
    global $global_value;
    // globalな変数と関数内で宣言すれば使用できる。可読性に難アリだと思うが。。
    echo $global_value;

    $global_value = 'global2';
    echo $global_value;
}
func2();

function staticVariable()
{
    $count_i = 0;
    // staticな変数はメモリの静的領域に格納される。
    // プログラム実行中は1つの固定されたメモリ位置を占有するため、解放されない。初期化はプログラム開始時に行われる。
    static $count_j = 0;

    $count_i ++;
    $count_j ++;

    // 表示　count_jだけstatic変数として静的領域に格納しているため1 2 3と増えていく。
    echo "i:{$count_i}, j:{$count_j} \n";
}
staticVariable();
staticVariable();
staticVariable();