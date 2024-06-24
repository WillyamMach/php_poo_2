<?php 

require __DIR__ . "/src/Modelo/Genero.php";
require __DIR__ . "/src/Modelo/Titulo.php";
require __DIR__ . "/src/Modelo/Filme.php";
require __DIR__ . "/src/Modelo/Serie.php";
require __DIR__ . "/src/Calculos/CalculadoraDeMaratona.php";

echo "Bem-vindo(a) ao ScreenMatch\n";

$filme = new Filme(
    "Thor - Ragnarok",
    2021,
    Genero::SuperHeroi,
    180,
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

$calculadora = new CalculadoraDeMaratona;

$calculadora->inclui($filme);
$calculadora->inclui($serie);
$duracao = $calculadora->duracao();
echo "Para essa maratona você precisa de $duracao minutos";