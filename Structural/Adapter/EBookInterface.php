<?php

namespace DesignPatterns\Structural\Adapter;

interface EBookInterface
{
    public function unlock();

    public function pressNext();

    /**
     * 返回当前页数和总页数，如 [10, 100]
     *
     * @return int[]
     */
    public function getPage(): array;
}
