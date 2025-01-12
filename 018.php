<?php
/**
 * @link https://www.phpexam.jp/archives/3281
 * @link https://www.php.net/manual/ja/language.oop5.decon.php
 */

 /**
  * デストラクタメソッドは、 特定のオブジェクトを参照するリファレンスがひとつもなくなったときにコールされる
  */
 class MyDestructableClass 
{
    function __construct() {
        print "In constructor\n";
    }

    function __destruct() {
        print "Destroying " . __CLASS__ . "\n";
    }
}

$obj = new MyDestructableClass();