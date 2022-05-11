<?php 


require __DIR__.'/vendor/autoload.php';

use src\Mensageiro;
use src\Email;
use src\Sms;


$msg = new Mensageiro(new Email());
$msg->setCanal('email');
$msg->enviarToken();

// --- canal sms
$msg2 = new Mensageiro(new Sms());
$msg2->setCanal('sms');
$msg2->enviarToken();





/*
// ---canal e-mail
$msg = new Mensageiro();
$msg->setCanal('email');
$msg->enviarToken();

// --- canal sms
$msg2 = new Mensageiro();
$msg2->setCanal('sms');
$msg2->enviarToken();
*/