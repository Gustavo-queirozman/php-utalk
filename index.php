<?php
    $randomico = round(microtime(true) * 1000);
    $contact ="55";  //codigo do pais
    $contact .= "38"; //ddd
    $contact  .= "999400531"; //numero do whatsapp
    $contact  .= "@c.us";
try{
    $postdata = http_build_query(
        array(
            'cmd'=> "chat",
            'id'=> "$randomico",
            'to'=> "$contact",
            'msg'=>"Boa tarde!! 
            Tudo bem?!
            Sou Gustavo do suporte técnico, como posso ajudar?"
        )

    );
    $opts = 
        array(
            'method'=>'POST',
            'header'=>'Content-type: application/x-www-form-urlencoded',
            'content'=>"$postdata"
        );
    //fazer envio de dados via post para utalk 
    stream_context_create($opts, null);
}catch(Exception $e){
    echo $e;
}
?>