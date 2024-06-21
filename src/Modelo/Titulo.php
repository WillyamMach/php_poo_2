<?php 
class Titulo {
    private array $notas;

    public function __construct(
        public readonly string $nome,
        public readonly int $anoLancamento,
        public readonly Genero $genero,
           ) {
        $this->nome = $nome;
        $this->anoLancamento = $anoLancamento;
        $this->genero = $genero;
        $this->notas = [];
    }

    public function avalia(float $nota) {
        $this->notas[] = $nota;
    }

    public function media (): float {
        $somaDasNotas = array_sum($this->notas);
        $quantidadeNotas = count($this->notas);
        return $somaDasNotas / $quantidadeNotas;
    }
}