<?php


require __DIR__.'/vendor/autoload.php';

use src\dao\UsuarioModel;
use src\dao\ContatoModel;
use src\dao\LeadModel;

$contratoModel = new ContatoModel();
print_r($contratoModel);
echo '<br>';


$lealdModel = new LeadModel();
print_r($lealdModel);
echo '<br>';

$usuarioModel = new UsuarioModel();
print_r($usuarioModel);
echo '<br>';
