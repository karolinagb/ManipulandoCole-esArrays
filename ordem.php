<?php

$notas = [10, 8, 9, 7];

$notasOrdenadas = $notas;
// Função para ordenação no php:
// o sort passa o valor por referência, então se você não quiser que seu array modifique,
// crie uma variável que receba esse array e use ela no sort
sort($notasOrdenadas);

echo "Desordenadas:";
var_dump($notas);

echo "Ordenadas";
var_dump($notasOrdenadas);

// Para número o sorte define em ordem crescente
// Para string ele define em ordem alfabetica

//Ordenando algo que o php não saberia
//Definindo o critério de ordenação:

//array de arrays ou array multidimensional:

$notas2 =[
    [
        'Aluno' => 'Maria',
        'Nota' => 10
    ],
    [
        'Aluno' => 'Vinicius',
        'Nota' => 6
    ],
    [
        'Aluno' => 'Ana',
        'Nota' => 9
    ]
];

// Função que será passada para o unsort
// Retorna 
// Ela vai receber um array porque meu array principal possui arrays dentro
// Essa função precisa retornar um inteiro
function ordenaNotas(array $nota1, array $nota2) : int
{
    // Quero ordenar em ordem descrescente
    // Se a nota1 for maior que a nota2, a nota1 vem primeiro
    //Retorna negativo quando o primeiro elemento é maior que o segundo
    //Elemento 1 vem primeiro
    // if($nota1['Nota'] > $nota2['Nota']){
    //     return -1;
    // }

    // Retorna positivo quando o segundo elemento é maior que o primeiro
    //Elemento 2 vem primeiro
    // if($nota2['Nota'] > $nota1['Nota']){
    //     return 1;
    // }

    // Se ela forem iguais retorno zero
    // if($nota1 == $nota2){
    //     return 0;
    // }
    // return 0;

    // Posso substituir todas as verificaçoes que fiz acima por uma forma mais simples
    // Posso utilizar o operador de espaço nave
    // Esse operador retorna -1 se o primeiro elemento é menor que o segundo
    // Se o primeiro elemento for maior que o segundo ele retorna 1
    // E se eles forem iguais ele retorna 0
    //Isso gera uma ordenação de forma crescente
    // Se eu quiser de forma descrescente é só inverter os elementos
    return $nota2['Nota'] <=> $nota1['Nota'];
}

//Função que recebe outra função para definirmos como o php deve ordenar algo
// Caso eu queira passar uma função que já existe por parâmetro posso utilizar 
// uma string com o nome da função
usort($notas2, 'ordenaNotas');

var_dump($notas2);