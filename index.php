<?php
$token = "fx42tr2"; //Coloque aqui o WhatsWeb ID (token)
$url = "https://v1.utalk.chat/send/$token";

//Coloque true em apena um
$text = false; //Enviar mensagem com texto
$arquivo = false; //Enviar mensagem com mídia (Imagem, PDF, Aúdio, Video, TXT etc..)
$linkeMiniatura = true; //Enviar mensagem com link e miniatura (thumb)

$id = round(microtime(true) * 1000); //Gera número randômico.
$mensagem = "Olá! Sou Gustavo responsável pelo suporte técnico da LR Applications, como posso ajudar?";
$numero = "55"; //codigo pais, 55 se for enviar msg para numeros do brasil
$numero .= "38"; //ddd
$numero .= "999400531"; //numero que você quer enviar a mensagem
$numero .= "@c.us";

if ($text === true) {
  $postfields = "cmd=chat&id=$id&to=$numero&msg=$mensagem";
  Curl($token, $postfields);
} elseif ($arquivo === true) {
  $linkArquivo = "https://talk.umbler.com/assets/img/umblerito-blue-tshirt-oka.png";
  $postfields =  "cmd=media&id=$id&to=$numero&link=$linkArquivo&msg=$mensagem";
  Curl($token, $postfields);
} elseif ($linkeMiniatura === true) {
  $imagem = "https://talk.umbler.com/assets/img/umblerito-blue-tshirt-oka.png";
  $titulo = "titulo";
  $descricao = "decricao";
  $link = "https://talk.umbler.com";
  $result = file_get_contents("$url/?cmd=link&id=$id&to=$numero&thumb=$imagem&title=$titulo&desc=$descricao&link=$link");
  echo $result;
}

function Curl($url, $postfields){
  $curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => $postfields,
    CURLOPT_HTTPHEADER => array(
      'Content-Type: application/x-www-form-urlencoded'
    ),
  ));
  $response = curl_exec($curl);
  curl_close($curl);
  return $response;
}
