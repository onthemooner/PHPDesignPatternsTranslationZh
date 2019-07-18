<?php

namespace DesignPatterns\Structural\Adapter;

/**
 * 这是一个适配器，它实现了BookInterface，
 * 所以，当客户需要一个Book的时候，你不需要去改代码
 */
class EBookAdapter implements BookInterface
{
    /**
     * @var EBookInterface
     */
    protected $eBook;

    /**
     * @param EBookInterface $eBook
     */
    public function __construct(EBookInterface $eBook)
    {
        $this->eBook = $eBook;
    }

    /**
     * 这个类使用适当的转化把一个接口变成另一个
     */
    public function open()
    {
        $this->eBook->unlock();
    }

    public function turnPage()
    {
        $this->eBook->pressNext();
    }

    /**
     * 注意这个适配器的行为：EBookInterface::getPage() 会返回一个数组（2个页面数值），
     * 但是BookInterface::getPage() 只需要返回一个当前页面数值，所以我们要适配这个行为
     *
     * @return int
     */
    public function getPage(): int
    {
        return $this->eBook->getPage()[0];
    }
}
