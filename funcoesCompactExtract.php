<?php

$dados2 = 
[
    'nome' => 'Thales',
    'nota' => '10',
    'idade' => '29'
];

// ['nome' => $nome2, 'nota' => $nota2, 'idade' => $idade2] = $dados2;

//Quero pegar todas as chaves já existentes do array e transformar elas em variáveis
// extract() - pega as chaves e torna em variáveis e atribui os valores correspondentes
//Não usar para formularios, parametros da url...
//Usar para dados que confie (criados ou que voce ja tenha limpado)
extract($dados2);

var_dump($nome, $nota, $idade);

//compact() - pega várias variáveis e transforma em um array:
var_dump(compact('nome', 'nota', 'idade'));