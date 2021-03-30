<?php
//ESCOPO GLOBAL
$nome = "Thiago Bertolino";
$a = 1;
$b = 3;
$c = 7;

function exibeNome() {
	global $nome;
	echo $nome;
}

exibeNome();
echo"<hr>";

///////////////

function exibeCidade(){
	global $cidade;
	$cidade = "Belo Horizonte";
}

exibeCidade();
echo $cidade;
echo "<hr>";

///////////////

function soma(){
	echo $GLOBALS['a'] + $GLOBALS ['b'] + $GLOBALS ['c'];
}

soma ();