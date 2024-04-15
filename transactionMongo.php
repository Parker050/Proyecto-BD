<?php
$curl = curl_init();

curl_setopt_array($curl,array(
    CURLOPT_URL => "https://us-east-2.aws.data.mongodb-api.com/app/data-qkpgd/endpoint/data/v1/action/insertOne",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => '{
        "collection":"Logs",
        "database":"Transacctions",
        "dataSource":"Cluster0",
        "document":{'.$jsonInsert.'}
    }',
    CURLOPT_HTTPHEADER => array(
        'api-key: eGEspTaW6BgWLiAK9ZLfjCykZSV52y5MjsQt1IF59k3Z5gnPMQsvQbOBZubr96Qa',
        'Content-Type: application/json'
    ),
));

$response = curl_exec($curl);
curl_close($curl);
//echo $response;
