<?php
/***** Escalares *****/

//string = sequencia de caracteres com aspas
$nome = "Olá mundo!";
var_dump($nome);
if (is_string($nome)):
	echo "É uma string";
else:
	echo "Não é uma string";
endif;

echo "<hr>";

//int = numeros inteiros

$idade = 21;
var_dump($idade);
if (is_int($idade)):
	echo "É um inteiro";
else:
	echo "Não é um inteiro";
endif;

echo "<hr>";

//float = numeros reais

$valor = 1.77;
var_dump($valor);
if (is_float($valor)):
	echo "É um float";
else:
	echo "Não é um float";
endif;

echo "<hr>";

// boolean = true or false

$admin = true;
var_dump($admin);
if (is_bool($admin)):
	echo "É um boolean";
else:
	echo "Não é um boolean";
endif;

echo "<hr>";

/********** Compostos **********/

//array
$carros = array("Gol", "Uno", "Camaro", 12, 20.6, true);
var_dump($carros);
if (is_array($carros)):
	echo "É um array";
else:
	echo "Não é um array";
endif;

echo "<hr>";

//objects
class Cliente {
	public $nome;
	public function atribuirNome($nome) {
		$this -> $nome = $nome;
	}
}

$cliente = new Cliente();
$cliente->atribuirNome("Thiago");
var_dump($cliente);

if (is_object($cliente)):
	echo "É um object";
else:
	echo "Não é um object";
endif;

echo "<hr>";

/*******Especiais******/

//NULL
$cidade = NULL;
var_dump($cidade);
