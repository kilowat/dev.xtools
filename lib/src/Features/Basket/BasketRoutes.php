<?php

namespace Dev\Xtools\Features\Basket;

use Bitrix\Main\Routing\RoutingConfigurator;
use Dev\Xtools\Core\Routable;
use Dev\Xtools\Features\Basket\Controllers\BasketController;

class BasketRoutes implements Routable
{
    public static function registerRoutes(RoutingConfigurator $routes)
    {
        $routes->prefix('api')->group(function (RoutingConfigurator $routes) {
            $routes->get('basket/add', [BasketController::class, 'get']);
        });
    }
}