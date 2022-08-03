<?php
namespace Dev\Xtools\Features\Basket\Models;


use Dev\Xtools\Features\Basket\Services\BasketItemModel;

class BasketModel
{
    private $_items;

    /**
     * BasketModel constructor.
     * @param BasketItemModel[] $items
     */
    public function __construct(Array $items)
    {
        $this->_items = $items;
    }
}