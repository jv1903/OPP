<?php
class Carro {
    public $nome;
    public $cor;
    public $marca;
    public $ano;
    public $km;
    public $motor;
    public $combustivel;
    public $cavalos;
    
    public function apresentar(): string {
        return "Olá, meu carro é um {$this->nome}, a cor dele é {$this->cor}, a marca dele é {$this->marca}, o motor dele é {$this->motor} o combustivel dele é {$this->combustivel} e ele tem {$this->cavalos}.";
    }
}
?>
