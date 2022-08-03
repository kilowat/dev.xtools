<?php

namespace Xtools\Features\Basket;

use Bitrix\Main\Routing\RoutingConfigurator;
use Xtools\Core\Routable;
use Xtools\Features\Basket\Controllers\BasketController;

class BasketRoutes implements Routable
{
    public static function registerRoutes(RoutingConfigurator $routes)
    {
        $routes->get('/api/basket/add', [BasketController::class, 'get']);
    }
}