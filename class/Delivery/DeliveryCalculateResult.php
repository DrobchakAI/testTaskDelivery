<?php

namespace Delivery;
/**
 * Class DeliveryCalculateResult
 * 
 * Результат запроса из транспортной компании.
 */
class DeliveryCalculateResult{
    public float $Price;
    public string $Date;
    public string $Error;

    public function __construct($price,$date,$error = "")
    {
        $this->Price = $price;
        $this->Date = $date;
        $this->Error = $error;
    }
}