<?php 


require __DIR__.'/vendor/autoload.php';

use src\Mensageiro;
use src\Email;
use src\Sms;
use src\whatsapp;


$msg = new Mensageiro(new Email());
$msg->enviarToken();

echo '<br>';
// --- canal sms
$msg2 = new Mensageiro(new Sms());
$msg2->enviarToken();

echo '<br>';
// --- canal what
$msg3 = new Mensageiro(new Whatsapp());
$msg3->enviarToken();

