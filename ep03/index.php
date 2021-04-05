<?php
require __DIR__."/vendor/autoload.php";

use Source\Support\Email;

$email = new Email();

$email->add(
    "Olá mudno",
    "Eae lek tudo bao contigo?",
    "Daniel",
    "funkeogato@gmail.com"
);

if($email->send()){
    echo "Email enviado";
}else{
    echo $email->error->getMessage();
}
