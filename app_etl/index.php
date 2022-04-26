<?php 

require __DIR__."/vendor/autoload.php";

use src\Leitor;

//--------------------------------- TXT
$leitorTXT = new Leitor();
$leitorTXT->setDiretorio(__DIR__.'/arquivos');
$leitorTXT->setArquivo('dados.txt');

echo '<pre>';
print_r($leitorTXT->lerArquivo());
echo '</pre>';


//--------------------------------- CSV
$leitorCSV = new Leitor();
$leitorCSV->setDiretorio(__DIR__.'/arquivos');
$leitorCSV->setArquivo('dados.csv');

echo '<pre>';
print_r($leitorCSV->lerArquivo());
echo '</pre>';

