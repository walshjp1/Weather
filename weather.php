<?php
class Forecast {
	private $time;
	private $temperature;
	private $icon;

	function __construct(){
		$time = "00:00";
		$temperature = "0";
		$icon = "icon_temp";
	}

	public function getForecast($lat, $lon){
	$url = "http://forecast.weather.gov/MapClick.php?lat=" . $lat . "&lon=" . $lon . "&FcstType=json";
	     $options = array(
	           'http'=>array(
	                'method'=>"GET",
	                'header'=>"Accept-language: en\r\n" .
	"User-Agent: Mozilla/5.0 (iPad; U; CPU OS 3_2 like Mac OS X; en-us) AppleWebKit/531.21.10 (KHTML, like Gecko)
	Version/4.0.4 Mobile/7B334b Safari/531.21.102011-10-16 20:23:10\r\n" // i.e. An iPad
	) );
	$context = stream_context_create($options);
	$data = json_decode(file_get_contents($url, false, $context)); return $data;
	}

	public function getTime(){
		return $this->time;
	}

	public function setTime($t){
		$this->time = $t;
	}

	public function getTemperature(){
		return $this->temperature;
	}

	public function setTemperature($t){
		$this->temperature = $t;
	}

	public function getIcon(){
		return $this->icon;
	}

	public function setIcon($i){
		$this->icon = $i;
	}
}
$day0 = new Forecast();
$day0->setTemperature($day0->getForecast(40.78,-79.95)->data->temperature[0]);
$day0->setTime($day0->getForecast(40.78,-79.95)->time->startPeriodName[0]);

print_r($day0->getTime());
print_r(": ");
print_r($day0->getTemperature());

$day1 = new Forecast();
$day1->setTemperature($day1->getForecast(40.78,-79.95)->data->temperature[1]);
$day1->setTime($day1->getForecast(40.78,-79.95)->time->startPeriodName[1]);

print_r($day1->getTime());
print_r(": ");
print_r($day1->getTemperature());

$day2 = new Forecast();
$day2->setTemperature($day2->getForecast(40.78,-79.95)->data->temperature[2]);
$day2->setTime($day2->getForecast(40.78,-79.95)->time->startPeriodName[2]);

print_r($day2->getTime());
print_r(": ");
print_r($day2->getTemperature());

$day3 = new Forecast();
$day3->setTemperature($day3->getForecast(40.78,-79.95)->data->temperature[3]);
$day3->setTime($day3->getForecast(40.78,-79.95)->time->startPeriodName[3]);

print_r($day3->getTime());
print_r(": ");
print_r($day3->getTemperature());

$day4 = new Forecast();
$day4->setTemperature($day4->getForecast(40.78,-79.95)->data->temperature[4]);
$day4->setTime($day4->getForecast(40.78,-79.95)->time->startPeriodName[4]);

print_r($day4->getTime());
print_r(": ");
print_r($day4->getTemperature());

$day5 = new Forecast();
$day5->setTemperature($day5->getForecast(40.78,-79.95)->data->temperature[5]);
$day5->setTime($day5->getForecast(40.78,-79.95)->time->startPeriodName[5]);

print_r($day5->getTime());
print_r(": ");
print_r($day5->getTemperature());

$day6 = new Forecast();
$day6->setTemperature($day6->getForecast(40.78,-79.95)->data->temperature[6]);
$day6->setTime($day6->getForecast(40.78,-79.95)->time->startPeriodName[6]);

print_r($day6->getTime());
print_r(": ");
print_r($day6->getTemperature());
?>