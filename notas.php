<?php

$notas = 
[
    'Ana' => '10',
    'Roberto' => 7,
    'Joao' => 8,
    'Maria' => 9,
    'Vinicius' => null
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

//Como verificar se um aluno fez a prova:
// foreach($notas as $aluno => $nota){
//     if($aluno == 'Vinicius'){
//         return true;
//     }
// }

//Podemos fazer isso de forma mais rápida
//array_key_exists() ou key_exists() - verifica se uma chave existe dentro de um array:
echo "Vinicius fez a prova\n";
var_dump(array_key_exists('Vinicius', $notas));

//Se eu quiser verificar se uma chave existe e é diferente de nulo:
//isset() - verifica se dentro do array existe essa chave e se ela nao e nula
echo "Vinicius fez a prova\n";
var_dump(isset($notas['Vinicius']));


echo "Alguém tirou 10?\n";
//in_array = verifica se dentro do array existe o valor passado
var_dump(in_array(10, $notas));

echo "Alguém tirou 10 tipo inteiro?\n";
// Se eu quiser verificar o valor exato juntamente com seu tipo
//3 parametro strict = comparação mais estrita
//No caso ao inves de usar ==, ele vai usar ===
var_dump(in_array(10, $notas, true));

echo "Quem tirou 10?\n";
//Para buscar o valor que possui chave => $notas['Ana']
//Para encontrar a chave que possui um valor => array_search() - retorna a chave que possui o valor
//array_search retorna false caso o elemento não exista
//array_search também possui o parâmetro strict
var_dump(array_search('10', $notas, true));


