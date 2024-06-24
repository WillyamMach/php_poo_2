<?php 
class Titulo {
    private array $notas;

    public function __construct(
        public readonly string $nome,
        public readonly int $anoLancamento,
        public readonly Genero $genero,
           ) {

    }

    public function avalia(float $nota) {
        $this->notas[] = $nota;
    }

    public function media (): float {
        $somaDasNotas = array_sum($this->notas);
        $quantidadeNotas = count($this->notas);
        return $somaDasNotas / $quantidadeNotas;
    }

    public function duracaoEmMinutos(): int {
        return 0;
    }
}