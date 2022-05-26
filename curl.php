<?php
$randomico = round(microtime(true) * 1000);
$contact ="55";  //codigo do pais
$contact .= "38"; //ddd
$contact  .= "999400531"; //numero do whatsapp
$contact  .= "@c.us";

$headers = ['Content-Type:'=>'application/json; charset=utf-8'];

$fields = array(
    'cmd'=> 'chat',
    'id'=> '4AM6CC1',
    'to'=> '55+38+999400531@c.us',
    'msg'=>'ds'
);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://v1.utalk.chat/send/*****colocar token*******/');
curl_setopt($ch, CURLOPT_POST, true);

curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields)) ;
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

try{
    curl_exec($ch);
}catch(Exception $e){
    echo $e;
}


curl_close($ch);
//https://v1.utalk.chat/send/fx42tr2//?cmd=chat&id=4AM6CCDBO1&to=38999400531&msg=hello world
?>

