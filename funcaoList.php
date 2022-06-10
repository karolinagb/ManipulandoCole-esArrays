<?php

//Tupla = conjunto de elemento onde a posição dele significao algo

//Para não termos que pegar um por um para dar significado aos valores usamos a funcao List
$dados = ['Karol', 10, 24];
// $nome = $dados[0];
// $nota = $dados[1];
// $idade = $dados[2];

//list() - fica do lado esquerdo do sinal de atribuicao para criar nova variáveis
//Cria variáveis separadas a partir de um array
list($nome, $nota, $idade) = $dados;

//outra sintaxe do list:
// [$nome, $nota, $idade] = $dados;

var_dump($nome, $nota, $idade);

//Para arrays com chaves:
$dados2 = 
[
    'nome' => 'Thales',
    'nota' => '10',
    'idade' => '29'
];

['nome' => $nome2, 'nota' => $nota2, 'idade' => $idade2] = $dados2;

var_dump($dados2);

//OBS: list() funciona somente com arrays numéricos e espera que esses índices comecem de 0 (zero).


