# 静态工厂方法模式

## 目的

**与抽象工厂模式类似，此模式用于创建一系列相关或依赖的对象**

**静态工厂模式和抽象工厂模式的区别在于静态工厂模式只使用一个静态方法来创建它可以创建的所有类型的对象**

**它通常被命名为“工厂”或“构建”**

## 示例

-  Zend Framework: `Zend_Cache_Backend` 或 `_Frontend` 使用一个工厂方法来创建前端和后端的缓存

## UML图
![](./uml/uml.png)

## 代码

StaticFactory.php  
Formatter.php  
FormatString.php  
FormatNumber.php  

## 测试

Tests/StaticFactoryTest.php

## 参考
- https://github.com/domnikl/DesignPatternsPHP/tree/master/Creational/StaticFactory
