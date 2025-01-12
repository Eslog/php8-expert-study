<?php
/**
 * @link https://www.phpexam.jp/archives/3630
 * @link https://www.php.net/manual/ja/language.oop5.late-static-bindings.php
 */

/**
 * 遅延静的束縛
 */

class Car
{
    protected static $price;

    public static function getPrice()
    {
        // 出力結果がNULL
        return self::$price;
        // 出力結果が14000000
        // return static::$price;
    }
}

class Track extends Car
{
    protected static $price = 1_400_000;
}

var_dump(Track::getPrice());
