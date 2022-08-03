<?php
namespace Xtools\Features\Basket\Services;

use Bitrix\Sale\Basket;

class BasketServiceBx implements BasketService
{
    private Basket $_basket;

    public function __construct(Basket $basket)
    {
        $this->_basket = $basket;
    }

    public function add(int $id): int
    {
        // TODO: Implement add() method.
    }

    public function remove(int $id)
    {
        // TODO: Implement remove() method.
    }

    public function removeAll()
    {
        // TODO: Implement removeAll() method.
    }

    public function getById()
    {
        // TODO: Implement getById() method.
    }

    public function getItems()
    {
        // TODO: Implement getItems() method.
    }

    public function getBasket()
    {
        // TODO: Implement getBasket() method.
    }

}