<?php

namespace DesignPatterns\Creational\Singleton;

final class Singleton
{
    /**
     * @var Singleton
     */
    private static $instance;

    /**
     * 通过惰性初始化获取实例（在首次使用时创建）
     */
    public static function getInstance(): Singleton
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    /**
     * 不允许从外部调用以防止创建多个实例，
     * 为了使用单例模式, 你必须使用 Singleton::getInstance() 方法来获取实例
     * 给 __construct() 方法加上 private 来防止类被 new
     */
    private function __construct()
    {
    }

    /**
     * 阻止该实例被克隆（如果不给 __clone() 方法加上 privat 这将创建该实例的第二个实例）
     */
    private function __clone()
    {
    }

    /**
     * 阻止该实例被反系列化 (这将创建该实例的第二个实例)
     */
    private function __wakeup()
    {
    }
}
