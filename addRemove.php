<?php

$alunos2021 = 
[
    'Ana',
    'Roberto',
    'Joao',
    'Maria',
    'Vinicius'
];

$novosAlunos = 
[
    'Patricia',
    'Nico',
    'Kilderson',
    'Daiane',
    'Karol',
    'Thales',
    'Titico'
];

$alunos2022 = [...$alunos2021,'Alexandra', ...$novosAlunos];


//Adicionando elementos

//array_push() - Passa por referência novos valores especificados ao array
array_push($alunos2022, 'Alice', 'Bob', 'Charlie');

//Posso usar o operador [] para adicionar elementos assim também:
$alunos2022[] = 'Luiz';

//Adicionar elemento no início do array:
array_unshift($alunos2022, 'Stephane');
//Esse nome se dá porque a função array_shift pega o primeiro aluno, remove ele e o retorna
//o array_shift em caso de arrays numericos ele reordena nosso array, chaves de string não são afetadas
echo array_shift($alunos2022) . PHP_EOL;

//array_pop pega o último elemento, remove ele e o retorna
echo array_pop($alunos2022) . PHP_EOL;

var_dump(@$alunos2022);

//