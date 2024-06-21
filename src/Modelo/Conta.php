<?php 
class Conta {
    public function __construct(
        public string $saldo,
        public readonly string $nome,
        public readonly ContaBancarias $tipo,
    ) {
        
    }
}