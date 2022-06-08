<?php

$notasBimestre1 = 
[
    'Ana' => 10,
    'Roberto' => 7,
    'Joao' => 8,
    'Maria' => 9,
    'Vinicius' => 6
];

$notasBimestre2 = 
[
    'Ana' => 9,
    'Joao' => 8,
    'Roberto' => 7,
    'Maria' => 10,
    'Vinicius' => 6
];

//Pegar todos os elementos cujos valores que estejam no primeiro array não estejam no segundo:
//Retorna os elementos cujos valores de bimestre 1 não estão em bimestre 2
//array_diff só leva em consideração o valor
var_dump(array_diff($notasBimestre1, $notasBimestre2));

//Posso fazer essa diferença entre arrays utilizando as chaves:
var_dump(array_diff_key($notasBimestre1, $notasBimestre2));

//Diferença entre arrays levando em consideração a chave e o valor
var_dump(array_diff_assoc($notasBimestre1, $notasBimestre2));