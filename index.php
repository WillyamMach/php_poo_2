<?php 

require __DIR__ . "/src/Modelo/Genero.php";
require __DIR__ . "/src/Modelo/Filme.php";

echo "Bem-vindo(a) ao ScreenMatch\n";

$filme = new Filme(
    "Thor - Ragnarok",
    2021,
    Genero::SuperHeroi,
);

// $filme->nome = 'Thor Ragnarok';
// $filme->anoLancamento = 2021;
// $filme->genero = 'super-heroi';

$filme->avalia(10);
$filme->avalia(9);
$filme->avalia(8);
$filme->avalia(7);
$filme->avalia(6);
$filme->avalia(5);

echo $filme->media();

var_dump($filme);