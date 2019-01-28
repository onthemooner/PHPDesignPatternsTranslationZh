# 工厂方法模式

## 目的

**在应用程序中只存在此对象的唯一实例来处理所有的请求**

## 示例
-  数据库连接器
-  日记记录器 (如果有不同目的的多个日记文件，也可能为多例模式）
-  锁定应用程序的文件 (在文件系统中只存在唯一一个)

## UML图
![](./uml/uml.png)

## 代码

Singleton.php

## 测试

Tests/SingletonTest.php

## 参考
- https://github.com/domnikl/DesignPatternsPHP/tree/master/Creational/Singleton
- http://en.wikipedia.org/wiki/Singleton_pattern
