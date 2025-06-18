<?php
include_once './Classes/Animal.class.php';
include_once './Classes/Gato.class.php';
include_once './Classes/Pessoa.class.php';
include_once './Classes/Carro.class.php';
include_once './Classes/Abrigo.class.php';
include_once './Classes/Adocao.class.php';

// Pessoa
$pessoa = new Pessoa();
$pessoa->nome = 'João';
$pessoa->idade = 17;
echo $pessoa->apresentar();
echo "<br><br>";

// Gato
$gato = new Gato();
$gato->nome = 'Mustafa';
echo $gato->miar();
echo $gato->comer();
echo $gato->dormir();
echo "<br><br>";

// Carro
$carro = new Carro();
$carro->nome = 'Corolla do Novo';
$carro->cor = 'Branco';
$carro->marca = 'Toyota';
$carro->ano = '2K25';
$carro->km = '0KM';
$carro->motor = 'I4 2.0';
$carro->combustivel = 'Flex';
$carro->cavalos = '175 cv';
echo $carro->apresentar();
echo "<br><br>";

// Abrigo
$abrigo = new Abrigo();
$abrigo->nome = 'Lar Esperança';
$abrigo->cidade = 'Porto Alegre ';
echo $abrigo->apresentar();
echo "<br><br>";

// Adoção
$animal = new Gato();
$animal->nome = 'Mustafa';

$adocao = new Adocao();
$adocao->pessoa = $pessoa;
$adocao->animal = $animal;
$adocao->abrigo = $abrigo;

echo $adocao->registrarAdocao();
echo "<br><br>";
?>
