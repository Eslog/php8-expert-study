<?php
/**
 * @link https://www.phpexam.jp/archives/3626
 * @link https://www.php.net/manual/ja/language.oop5.cloning.php
 */

class SubObject
{
    static $instances = 0;
    public $instance;

    public function __construct() {
        $this->instance = ++self::$instances;
    }

    public function __clone() {
        $this->instance = ++self::$instances;
    }
}

class MyCloneable
{
    public $object1;
    public $object2;

    function __clone()
    {
        // this->object のコピーを作成します。こうしないと、
        // 同じオブジェクトを指すことになってしまいます。
        $this->object1 = clone $this->object1;
    }
}

$obj = new MyCloneable();

$obj->object1 = new SubObject();
$obj->object2 = new SubObject();

$obj2 = clone $obj;

print "元のオブジェクト\n";
print_r($obj);

print "クローンオブジェクト\n";
print_r($obj2);
