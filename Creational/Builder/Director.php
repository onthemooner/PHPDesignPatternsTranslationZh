<?php

namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\Parts\Vehicle;

/**
 * Director【指挥者】是构建者模式的一部分，它知道构建者有哪些接口，
 * 它在构建者的帮助下来构建一个复杂的对象
 *
 * 你可以注入多个构建者来创建更加复杂的对象
 */
class Director
{
    public function build(BuilderInterface $builder): Vehicle
    {
        $builder->createVehicle();
        $builder->addDoors();
        $builder->addEngine();
        $builder->addWheel();

        return $builder->getVehicle();
    }
}
