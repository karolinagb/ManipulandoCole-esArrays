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

//gettype() - recebe uma variável e retorna o tipo dela
//Se eu quiser verificar se uma variável é array:

if(gettype($notas) == 'array')
{
    echo "Sim, é um array\n";
};

//Posso usar também o is_array:

if(is_array($notas) == 'array')
{
    echo 'Sim, é um array';
};

var_dump(array_is_list($notas));

function funcao(array $valor){
    //como saber se um array é numérico
    //ou seja, começa com 0 e são crescentes 
    //Para fazer um for nele
    //Podemos usar a função array_is_list
    //Retorna verdadeiro se esse array for numerico - todas as chaves sao numeros e começa com 0 e 
    //vai crescente
    //Retorna falso se esse array não for uma lista sequencial
    array_is_list($valor);

    for($i = 0; $i < count($valor); $i++){

    }
}