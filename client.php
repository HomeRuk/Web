<?php
$lead = new Lead();
$lead->id = 1;
print_r($lead->getData());

class Lead{
	private $host = "https://api.thingspeak.com/channels/122038/feeds/last.json?api_key=9A46C54NQCKHWNRF";//CHANGE ME
	private $clientId = "";//CHANGE ME
	private $clientSecret = "";//CHANGE ME
	public $id;//id of lead to return
	public $fields;//array of fields to return
	
	public function getData(){
		$url = $this->host;
		$ch = curl_init($url);
		curl_setopt($ch,  CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('accept: application/json',));
		$response = curl_exec($ch);
		return $response;
	}
	
	private function getToken(){
		$ch = curl_init($this->host . "/identity/oauth/token?grant_type=client_credentials&client_id=" . $this->clientId . "&client_secret=" . $this->clientSecret);
		curl_setopt($ch,  CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('accept: application/json',));
		$response = json_decode(curl_exec($ch));
		curl_close($ch);
		$token = $response->access_token;
		return $token;
	}
	private static function csvString($fields){
		$csvString = "";
		$i = 0;
		foreach($fields as $field){
			if ($i > 0){
				$csvString = $csvString . "," . $field;
			}elseif ($i === 0){
				$csvString = $field;
			}
		}
		return $csvString;
	}
}