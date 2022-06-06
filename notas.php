<?php

$notas = 
[
    'Ana' => 10,
    'Roberto' => 7,
    'Joao' => 8,
    'Maria' => 9,
    'Vinicius' => 6
];

// rsort() - ordena de forma contrária do sorte - descrecente
// rsort($notas);

// a = associetiv
// arsort = ordena mantendo a chave e de forma descrescente
//arsort($notas);

//asort = ordena mantendo a chave e de forma crescente

// Ordena pelas chaves e não pelo valor
// No nosso caso que as chaves são os nomes, ficam em ordem alfabética
//key = chave
// ksort = ordem alfabetica crescente
// ksort($notas);

//krsort = ordem alfabetica descrescente
krsort($notas);

//uksort = da pra usar a ordenação por critério em ordem alfabetica tb

var_dump($notas);