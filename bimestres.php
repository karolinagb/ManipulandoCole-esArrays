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
];

//Pegar todos os elementos cujos valores que estejam no primeiro array não estejam no segundo:
//Retorna os elementos cujos valores de bimestre 1 não estão em bimestre 2
//array_diff só leva em consideração o valor
var_dump(array_diff($notasBimestre1, $notasBimestre2));

//Posso fazer essa diferença entre arrays utilizando as chaves:
var_dump(array_diff_key($notasBimestre1, $notasBimestre2));

//Diferença entre arrays levando em consideração a chave e o valor
var_dump(array_diff_assoc($notasBimestre1, $notasBimestre2));

//Pegar so o nome dos alunos que faltaram a prova
$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);
//array_keys() -- pega o valor da chave do array
var_dump(array_keys($alunosFaltantes));

//Também posso fazer assim:

foreach ($alunosFaltantes as $key => $value) {
    echo $key . PHP_EOL;
}

//Também podemos pegar só os valores, as notas nesse caso:
var_dump(array_values($alunosFaltantes));

//ou

foreach ($alunosFaltantes as $key => $value) {
    echo $value . PHP_EOL;
}

$nomeAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);

//Podemos combinar arrays para fazer agora a nota como chave e o nome como valor
//$notasAlunos = vai ser chave
//$nomeAlunos = vai ser valor
var_dump(array_combine($notasAlunos, $nomeAlunos));

//Usando array_combine se os arrays não tiverem o mesmo tamanho nós vamos ter um erro

//Podemos usar a função array_flip para inverter os arrays e obter o mesmo resultado
//O que e chave vira valor e o que é valor vira chave
echo "Usando array_flip\n";
var_dump(array_flip($alunosFaltantes));