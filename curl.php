<?php
$randomico = round(microtime(true) * 1000);
$contact ="55";  //codigo do pais
$contact .= "38"; //ddd
$contact  .= "999400531"; //numero do whatsapp
$contact  .= "@c.us";

$headers = array(

    "Content-Type"=> "application/x-www-form-urlencoded",
    "Content-Length" => "60",
    "Connection"=>"keep-alive",
    "X-Powered-By"=>"Express",
    "Access-Control-Allow-Origin"=> "*",
    "Access-Control-Allow-Headers"=> "X-Requested-With",
    "ETag"=>'W/"3c-xEMD4FAMWk9xOOs4AuzGt1py7rA'
);

$fields = array(
    'cmd'=> 'chat',
    'id'=> '4AM6CCDBO1',
    'to'=> '5538999400531@c.us',
    'msg'=>'ds'
);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://v1.utalk.chat/send/fx42tr2/');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POSTFIELDS, $fields) ;


$result = curl_exec($ch);

curl_close($ch);
?>