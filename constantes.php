<?php

//CONSTANTES

define ("NOME", "Thiago Bertolino");
define ("IDADE", 21);
define ("ALTURA", 1.75);
define ("CASADO", false);

define ("TIMES", ['flamengo', 'são paulo', 'palmeiras']);


echo 'Meu nome é ' .NOME. ', minha idade é ' .IDADE. ' e minha altura é ' .ALTURA. ' e eu sou ' .CASADO. '.';
echo '<hr>';
var_dump(TIMES);

function exibeNome() {
	echo NOME;
}

exibeNome();