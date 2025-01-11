<?php
/**
 * @link https://www.phpexam.jp/archives/3113
 */
declare(strict_types=1);
error_reporting(-1);

/* Callable */
function callbackFunction()
{
    echo __METHOD__ , "\n";
}

class CallbackClass
{
    public static function staticMethod()
    {
        echo __METHOD__ , "\n";
    }

    public function method()
    {
        echo __METHOD__ , "\n";
    }

    public function __invoke()
    {
        echo __METHOD__ , "\n";
    }
}

// Callableな型を引数にする関数
function call(callable $callback)
{
    return call_user_func($callback);
}
// stringの関数名
call('callbackFunction');
// クラス名とメソッド名(string)の配列
call(['CallbackClass', 'staticMethod']);
// クラスオブジェクトとメソッド名(string)の配列
call([new CallbackClass(), 'method']);
// "クラス名::メソッド名"のフォーマットの文字列
call('CallbackClass::staticMethod');
// 無名関数やアロー関数
call(function() { echo __METHOD__ , "\n"; });
var_dump(call(fn() => 2*4));
// __invoke()を実装したクラスのオブジェクト
call(new CallbackClass());
