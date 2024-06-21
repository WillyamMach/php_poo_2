<?php 
class Filme extends Titulo { 
    private array $notas;

    public function __construct(public readonly int $duracaoMinutos) {

    }

}