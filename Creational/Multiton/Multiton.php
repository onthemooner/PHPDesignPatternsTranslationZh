<?php

namespace DesignPatterns\Creational\Multiton;

final class Multiton
{
    const INSTANCE_1 = '1';
    const INSTANCE_2 = '2';

    /**
     * @var Multiton[]
     */
    private static $instances = [];

    /**
     * 这个私有方法用于防止创建任意实例
     */
    private function __construct()
    {
    }

    public static function getInstance(string $instanceName): Multiton
    {
        if (!isset(self::$instances[$instanceName])) {
            self::$instances[$instanceName] = new self();
        }

        return self::$instances[$instanceName];
    }

    /**
     * 这个私有方法用于防止实例被克隆
     */
    private function __clone()
    {
    }

    /**
     * 这个私有方法用于防止实例被反系列化
     */
    private function __wakeup()
    {
    }
}
