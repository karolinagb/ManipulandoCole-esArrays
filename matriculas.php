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

//Criar uma lista a partir de outras

//array_merge - não preserva as chaves do array
//Quando temos chaves númericas ele vai reorganizar, mas não sobresve um ao outro
//Se forem chaves string, uma vai sobrescrever a outra caso a string seja igual
// $alunos2022 = array_merge($alunos2021, $novosAlunos);

//Se os arrays não tiverem chaves, como elas são definidas iguais automaticamente
//os elementos do segundo array que possuem a mesma chave numerica do primeiro, 
//serão sobrescritos pelo primeiro
// $alunos2022 = $alunos2021 + $novosAlunos;

//... = spread operator ou unpacking operator, desempacota um  array (cada elemento dele) dentro de outro
//Ele funciona como o array_merge mas consigo adicionar elementos no meio
$alunos2022 = [...$alunos2021,'Alexandra', ...$novosAlunos];

var_dump($alunos2022);

//Usando o ... como spread operator
//Nessa função todos os valores que cheguerem nela vao se tornar um único array
funcao([], [], [], []);

//Une varios parametros em 1 só
function funcao(array ...$alunos){

}

//Posso tambem passar um array e dividir seus valores com os parametros de uma função:
funcao2(...[1, 2, 3]);

function funcao2(int $a, int $b, int $c){
    
}

