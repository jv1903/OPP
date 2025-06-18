<?php
include_once 'Animal.class.php';

class Gato extends Animal {
    public $raca;
    public $cor;
    public $idade;
    public $porte;
    public $peso;
    public $sexo;

    public function miar(): string {
        return "Miau<br>";
    }

     public function rosnar(): string {
        return "r<br>";
    }

    public function comer(): string {
        return "Comendo<br>";
    }

    public function dormir(): string {
        return "Dormindo<br>";
    }
}
?>
