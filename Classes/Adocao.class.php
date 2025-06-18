<?php
class Adocao {
    public $pessoa;
    public $animal;
    public $abrigo;

    public function registrarAdocao(): string {
        return "Pessoa: {$this->pessoa->nome} adotou o animal: {$this->animal->nome} no {$this->abrigo->nome}.<br>";
    }
}
?>
