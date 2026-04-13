<?php

require __DIR__ . "/src/Modelo/Genero.php";
require __DIR__ . "/src/Modelo/Filme.php";

echo "Bem Vindo ao Screen Match\n";

$filme1 = new Filme( //novo objeto para a classe filme
    'Thor Ragnrok',
    2021,
    Genero::SuperHeroi,

);

$filme1->avaliar(10);
$filme1->avaliar(10);
$filme1->avaliar(9);
$filme1->avaliar(9);

echo $filme1->media() . "\n";

var_dump($filme1);