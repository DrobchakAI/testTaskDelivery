<? 
namespace Delivery;
/**
 * Class SlowDelivery
 * 
 * Класс медленной доставки.
 */
class SlowDelivery extends CommonDelivery{
    /**
     * Базовая цена.
     */
    public float $BasePrice;
    public function __construct($baseUrl,float $basePrice)
    {
        parent::__construct($baseUrl);
        $this->BasePrice = $basePrice;
    }
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
        $date= date("Y-m-d",\strtotime($result->date));
        $price = $this->BasePrice * (float)$result->coefficient;
        
        return new DeliveryCalculateResult($price,$date);
    }
}