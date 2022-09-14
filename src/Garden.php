<?php
/**
 * @author Drajat Hasan
 * @email drajathasan20@gmail.com
 * @create date 2022-09-14 23:32:06
 * @modify date 2022-09-14 23:49:22
 * @license GPLv3
 * @desc [description]
 */

namespace Barista\Arabica;

final class Garden
{
    private static $instance = null;
    private array $publicList = [];
    private array $privateList = [];

    public static function getInstance()
    {
        if (is_null(self::$instance)) self::$instance = new Garden;
        return self::$instance;
    }

    public function getPublicList()
    {
        return $this->publicList;
    }

    public function getPrivateList()
    {
        return $this->privateList;
    }

    public function register(string $type, array $value)
    {
        if (property_exists($this, $type . 'List')) $this->{$type . 'List'}[] = $value;
    }

    public function __call($method, $params)
    {
        if (!preg_match('/register/i', $method)) return;

        $type = strtolower(str_replace('register', '', $method));
        return $this->register($type, ...$params);
    }
}