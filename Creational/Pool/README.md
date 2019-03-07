# 对象池模式

## 目标

**对象池模式是一种创建型软件设计模式，它使用一组被初始化好的待命对象（既“池”），而不是通过指令按需分配或销毁对象**

**客户端将从池中请求一个对象并操作对象，当客户端完成对象操作，会把这个对象（这是一个特殊的工厂对象）返回给池，而不是销毁这个对象**

Object pooling can offer a significant performance boost in situations
where the cost of initializing a class instance is high, the rate of
instantiation of a class is high, and the number of instances in use at
any one time is low. The pooled object is obtained in predictable time
when creation of the new objects (especially over network) may take
variable time.

However these benefits are mostly true for objects that are expensive
with respect to time, such as database connections, socket connections,
threads and large graphic objects like fonts or bitmaps. In certain
situations, simple object pooling (that hold no external resources, but
only occupy memory) may not be efficient and could decrease performance.

UML Diagram
-----------

.. image:: uml/uml.png
   :alt: Alt Pool UML Diagram
   :align: center

Code
----

You can also find this code on `GitHub`_

WorkerPool.php

.. literalinclude:: WorkerPool.php
   :language: php
   :linenos:

StringReverseWorker.php

.. literalinclude:: StringReverseWorker.php
   :language: php
   :linenos:

Test
----

Tests/PoolTest.php

.. literalinclude:: Tests/PoolTest.php
   :language: php
   :linenos:

.. _`GitHub`: https://github.com/domnikl/DesignPatternsPHP/tree/master/Creational/Pool
.. __: http://en.wikipedia.org/wiki/Object_pool_pattern
