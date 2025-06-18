<?php
class Pessoa {
    public $nome;
    public $idade;

    public function apresentar(): string {
        return "Olá, meu nome é {$this->nome}, tenho {$this->idade} anos <br>";
    }
}
?>
