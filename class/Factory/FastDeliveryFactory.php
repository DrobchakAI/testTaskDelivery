<?php

namespace Factory;

use Delivery\FastDelivery;
use Delivery\CommonDelivery;
use Factory\DeliveryFactory;

/**
 * Фабрика быстрой доставки.
 */
class FastDeliveryFactory extends DeliveryFactory{
    /**
     * URL транспотной компании.
     */
    private const BaseUrl = "/src/fastDelivery.txt";
    
    /**
     * Создание доставки.
     */
    public function createDelivery() : CommonDelivery{
        return new FastDelivery(self::BaseUrl);
    }
}