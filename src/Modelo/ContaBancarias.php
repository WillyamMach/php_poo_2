<?php
enum ContaBancarias {
    case corrente = 0;
    case investimento = 1;
    case poupanca = 2;
    case universitaria = 3;   

    public function possuiTaxa(): bool {
        return match($this) {
            ContaBancarias::corrente, ContaBancarias::investimento => true,
            ContaBancarias::poupanca, ContaBancarias::universitaria => false,
        };
    }
}


?>