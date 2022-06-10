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
//os elementos do segundo array que possuem a mesma chave numerica do primeiro, seão sobrescritos
$alunos2022 = $alunos2021 + $novosAlunos;

var_dump($alunos2022);

