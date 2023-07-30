<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://coinranking1.p.rapidapi.com/coins?referenceCurrencyUuid=yhjMzLPhuIDl&timePeriod=24h&tiers%5B0%5D=1&orderBy=marketCap&orderDirection=desc&limit=50&offset=0",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: coinranking1.p.rapidapi.com",
		"X-RapidAPI-Key: a297aa930dmsh76d817f1b9e37c2p129a66jsnc36e8ecc6352"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);


?>
