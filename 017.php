<?php
/**
 * @link https://www.phpexam.jp/archives/3221
 * @link https://www.php.net/manual/ja/functions.returning-values.php
 */

/**
 * リファレンスreturn
 * 可読性はきついから使い道はほぼない。使ってるところみたことない
 */
 function &returns_reference()
{
    static $someref = 10; // 静的変数（関数の実行をまたいで値を保持）
    return $someref; // 参照として返す
}

// 関数の戻り値を参照で受け取る
$newref =& returns_reference();
echo $newref;

// $newref を変更すると $someref にも影響
$newref = 20;
echo returns_reference(); // 20 （元の変数も変更されている）