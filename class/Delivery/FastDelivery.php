<? 
namespace Delivery;
/**
 * Class FastDelivery
 * 
 * 
 * Класс быстрой доставки.
 */
class FastDelivery extends CommonDelivery{

    /**
     * Расчет стоимость доставки.
     * 
     */
    public function calculate(string $sourceKladr,string $targetKladr,float $weight)
    {                
        $result = $this->getData($sourceKladr,$targetKladr,$weight);
        
        
        if(!$result)
        {    
            return  new DeliveryCalculateResult(0,0,"Error");
        }
        
        if(date("H")>=18)
        {
            return new DeliveryCalculateResult(0,0,"Time's up");
        }
        
        $period = time() + ((int)$result->period * 24 * 60 * 60);        

        $date= date("Y-m-d",$period);
        $price = (float)$result->price;        
        return new DeliveryCalculateResult($price,$date);
    }

}