<?php

namespace DesignPatterns\Creational\StaticFactory;

/**
 * 注意1: 请记住，静态意味着全局状态是有害的，因为它不能被模拟用于测试
 * 注意2：不能进行子类化或模拟或具有多个不同的实例。
 */
final class StaticFactory
{
    /**
     * @param string $type
     *
     * @return Formatter
     */
    public static function factory(string $type): Formatter
    {
        if ($type == 'number') {
            return new FormatNumber();
        } elseif ($type == 'string') {
            return new FormatString();
        }

        throw new \InvalidArgumentException('Unknown format given');
    }
}
