<?php
class Abrigo {
    public $nome;
    public $cidade;

    public function apresentar(): string {
        return "Este é o abrigo {$this->nome}, localizado em {$this->cidade}.<br>";
    }
}
?>
