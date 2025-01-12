<?php

declare(strict_types=1);
error_reporting(-1);

/**
 * @link https://www.phpexam.jp/archives/3232
 * @link https://www.php.net/manual/ja/language.operators.php
 * @link https://www.php.net/manual/ja/language.operators.execution.php
 * @link https://www.php.net/manual/ja/language.operators.errorcontrol.php
 */

 /* 型演算子 */
class ParentClass
{
}
interface MyInterface
{
}
trait MyTrait
{
}
class MyClass extends ParentClass implements MyInterface
{
    use MyTrait;
}
class NotMyClass
{
}
// 比較 Traitはfalseになる（Traitってインスタンスじゃないし）
$object = new MyClass();
var_dump($object instanceof ParentClass);
var_dump($object instanceof MyInterface);
var_dump($object instanceof MyTrait);
var_dump($object instanceof MyClass);
var_dump($object instanceof NotMyClass);

/* 実行演算子 */
// バッククォートで囲むとシェルコマンドとして実行しようとする
$command = `dir`;
echo $command;

/* エラー制御演算子 */
$array_variable = [];
// エラーを無視する。これがエラー制御演算子
@$array_variable['not key']; // @がなければWarning(PHP7以前だとNotice)が出る
// set_error_handler()にエラーハンドラを設定している場合、PHP7以前は「常に0」だったがPHP8以降は「E_ERROR等の定数の値」を返す
set_error_handler(function() {
    var_dump(error_reporting()); // PHP7以下なら0、PHP8以降は E_ERROR | E_CORE_ERROR | E_COMPILE_ERROR | E_USER_ERROR | E_RECOVERABLE_ERROR | E_PARSE となる
});
@$array_variable['not key'];