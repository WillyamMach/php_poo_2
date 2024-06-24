<?php 
class Conta {
    private int $saldo;

    public function sacar(int $valorASacar): void {
        if($valorASacar > 0 && $this->saldo >= $valorASacar)
            $this->saldo = $this->saldo -$valorASacar;
    }

    public function depositar (int $valorADepositar) {
        if($valorADepositar > 0) 
            $this->saldo += $valorADepositar;
    }

    public function consultarSaldo() {
        return $this->saldo;
    }
}