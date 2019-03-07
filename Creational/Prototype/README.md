# 原型模式

## 目的

**为了减少每次创建一个新对象的系统开销，替换标准的方式（new Foo()）而采用创建一个原型，然后克隆这个原型的方法**

## 示例

- 大量数据的处理（例如：使用1个ORM在数据库中创建1000000条数据）

## UML图

![](./uml/uml.png)

## 代码

BookPrototype.php  
BarBookPrototype.php  
FooBookPrototype.php

## 测试

Tests/PrototypeTest.php

## 参考

- https://github.com/domnikl/DesignPatternsPHP/tree/master/Creational/Prototype
- http://en.wikipedia.org/wiki/Prototype_pattern
