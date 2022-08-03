<?php
namespace Dev\Xtools\Features\Basket\Services;

interface BasketService {
    public function add(int $id);
    public function remove(int $id);
    public function removeAll();
    public function getById();
    public function getItems();
    public function getBasket();
}