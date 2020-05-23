<?php
namespace Config;
/**
 * mysql配置
 * @author walkor
 */
class Db
{
    /**
     * 数据库的一个实例配置，则使用时像下面这样使用
     * $user_array = Db::instance('db1')->select('name,age')->from('users')->where('age>12')->query();
     * 等价于
     * $user_array = Db::instance('db1')->query('SELECT `name`,`age` FROM `users` WHERE `age`>12');
     * @var array
     */
    public static $db1 = array(
        'host'    => '120.24.174.33',
        'port'    => '3306',
        'user'    => 'admin',
        'password' => '123456',
        'dbname'  => 'yscms',
        'charset'    => 'utf8'
    );
}