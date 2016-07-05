<?php

//echo file_get_contents('https://api.thingspeak.com/channels/122038/feeds/last.json?api_key=9A46C54NQCKHWNRF');

$opts = array('http' =>
    array(
        'method'  => 'GET',
        'header'  => 'Content-type: application/x-www-form-urlencoded',   
		'User-Agent' => 'Mozilla/4.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.36',
    )
);

$context  = stream_context_create($opts);
echo $context ;
$result = file_get_contents('https://api.thingspeak.com/channels/122038/feeds/last.json?api_key=9A46C54NQCKHWNRF', false, $context);

echo $result;
?>