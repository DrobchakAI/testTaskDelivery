<?
namespace Delivery;
/**
 * Class CommonDelivery
 * 
 * Класс доставки.
 */
abstract class CommonDelivery{

    protected string $BaseUrl;
    protected string $Result;
    public function __construct($baseUrl)
    {
        $this->BaseUrl = $baseUrl;
    }
    /**
     * Расчет стоимость доставки.
     * 
     */
    public function calculate(string $sourceKladr,string $targetKladr,float $weight)
    {                
    }
    /**
     * Получечени данных из траспортной компании.
     * 
     */
    protected function getData(string $sourceKladr,string $targetKladr,float $weight)
    {
        $result = file_get_contents($_SERVER["DOCUMENT_ROOT"].$this->BaseUrl);
        return json_decode($result);
    }
}