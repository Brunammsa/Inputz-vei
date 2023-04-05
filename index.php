<?php

require_once 'vendor/autoload.php';

use Brunammsa\Inputzvei\InputText;

$input = new InputText("Qual o seu nome? ");
$answer = $input->ask();

echo "Seu nome é: {$answer}". PHP_EOL;
