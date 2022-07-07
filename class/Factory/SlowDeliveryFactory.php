<?php

namespace Factory;
use Delivery\SlowDelivery;
use Delivery\CommonDelivery;
use Factory\DeliveryFactory;

/**
 * Фабрика медленной доставки.
 */
class SlowDeliveryFactory extends DeliveryFactory{
    /**
     * URL транспотной компании.
     */
    private const BaseUrl = "/src/slowDelivery.txt";

     /**
     * Создание доставки.
     */
    public function createDelivery(float $basePrice = 0) : CommonDelivery{
        return new SlowDelivery(self::BaseUrl,$basePrice);
    }
}