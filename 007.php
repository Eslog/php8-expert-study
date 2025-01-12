<?php
/**
 * @link https://www.phpexam.jp/archives/3226
 * @link https://www.php.net/manual/ja/functions.variable-functions.php
 */

/**
 * 可変変数
 */

function foo()
{
    echo 'foo関数を呼び出した';
}
$func_name = 'foo';
$func_name();

// Laravelでいうとルーティングも可変変数
// Route::get('/user/{id}', [UserController::class, 'show']);

// こういうこともできる
class UserEntity
{
    public function __construct(
        protected $userId = 1,
        protected $userName = 'ユーザー名'
    )
    {}

    public function get(string $propertyName): string
    {
        return $this->$propertyName();
    }

    protected function UserId()
    {
        return $this->userId;
    }

    protected function UserName()
    {
        return $this->userName;
    }
}

$entity = new UserEntity();
echo $entity->get('UserName');
