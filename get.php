<?php
 try {
    file_get_contents('https://v1.utalk.chat/send/*****colocar token****/?cmd=chat&id=4AM6CCDBO1&to=dddenumero&msg=testando');
} catch (Exception $e) {
    echo $e;
}
