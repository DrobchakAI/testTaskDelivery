<?
use Factory\FastDeliveryFactory;
use Factory\SlowDeliveryFactory;
require("class/autoload.php");


$action = $_GET["action"];

$result = [];

switch($action){
    case "fast":{
        $result[] = getFastDelivery("","",0);
        break;
    }
    case "slow":{
        $result[] = getSlowDelivery("","",0);
        break;
    }
    default:{
        $result = array_merge($result,getAllDelivers("","",0));
        break;            
    }
}

echo "<pre>";
var_dump($result);
echo "</pre>";




function getAllDelivers(string $sourceKladr,string $targetKladr,float $weight)
{
    $results = [];
    $results[] = getFastDelivery($sourceKladr,$targetKladr,$weight);
    $results[] = getSlowDelivery($sourceKladr,$targetKladr,$weight);
    return $results;
}

function getFastDelivery(string $sourceKladr,string $targetKladr,float $weight)
{
    $factory = new FastDeliveryFactory();
    $delivery = $factory->createDelivery();    
    return $delivery->calculate("test","test",10);
}

function getSlowDelivery(string $sourceKladr,string $targetKladr,float $weight)
{
    $factory = new SlowDeliveryFactory();
    $delivery = $factory->createDelivery(1000);    
    return $delivery->calculate("test","test",10);
}