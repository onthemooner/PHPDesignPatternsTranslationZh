# 工厂方法模式

## 目的

**简单工厂模式的优点是你可以通过创建子类来实现不同的方法以便于创建对象**

**对于简单的案例，抽象类也可以替换为一个接口**

**这个模式是一个“真正”的设计模式，因为它实现了依赖倒置原则，正是著名的“SOLID”原则中的“D”**

> SOLID 原则基本概念：程序设计领域， SOLID (单一功能、开闭原则、里氏替换、接口隔离以及依赖反转)是由罗伯特·C·马丁在21世纪早期 引入的记忆术首字母缩略字，指代了面向对象编程和面向对象设计的五个基本原则。当这些原则被一起应用时，它们使得一个程序员开发一个容易进行软件维护和扩展的系统变得更加可能SOLID被典型的应用在测试驱动开发上，并且是敏捷开发以及自适应软件开发的基本原则的重要组成部分。

**它意味着工厂方法类依赖于抽象，而不是具体的类。与简单工厂模式或静态工厂模式相比，这才是真正的手法**

## UML图
![](./uml/uml.png)

## 代码

Logger.php  
StdoutLogger.php  
FileLogger.php  
LoggerFactory.php  
StdoutLoggerFactory.php  
FileLoggerFactory.php

## 测试

Tests/FactoryMethodTest.php

## 参考
- https://github.com/domnikl/DesignPatternsPHP/tree/master/Creational/FactoryMethod
- http://en.wikipedia.org/wiki/Factory_method_pattern
