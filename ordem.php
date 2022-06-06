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