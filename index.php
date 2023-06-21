<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://vindecoder.p.rapidapi.com/decode_vin?vin=WAUC4CF5XJA086318",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: vindecoder.p.rapidapi.com",
		"X-RapidAPI-Key: 46e4600040msh2fc1496a0ac3011p147823jsn2ca935ec8b45"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
    echo $response."\n";
    echo "<hr>";
	$obj = json_decode($response);
    echo "VIN:".$obj->vin."\n";
}