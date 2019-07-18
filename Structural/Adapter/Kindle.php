<?php

namespace DesignPatterns\Structural\Adapter;

/**
 * 这是一个适配器类，在生产环境代码中，这个类可以来至另一个代码包，一些vendor代码。
 * 注意，它使用了另一个命名方案，并且实现以另一种方式做了类似的事情。
 */
class Kindle implements EBookInterface
{
    /**
     * @var int
     */
    private $page = 1;

    /**
     * @var int
     */
    private $totalPages = 100;

    public function pressNext()
    {
        $this->page++;
    }

    public function unlock()
    {
    }

    /**
     * 返回当前页数和总页数，如 [10, 100]
     *
     * @return int[]
     */
    public function getPage(): array
    {
        return [$this->page, $this->totalPages];
    }
}
