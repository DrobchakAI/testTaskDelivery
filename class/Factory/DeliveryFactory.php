<?

namespace Factory;

use Delivery\CommonDelivery;
/**
 * 
 * Фабрика доставки.
 */
abstract class DeliveryFactory{
    public function createDelivery() : CommonDelivery{
        return null;
    }    
}