<?php
// estruturas de repetição 
$nomedovetor = [1,2,3,4,5,6,7];

foreach ($nomedovetor as $key => $value) {
    echo "<br>key = $key";
    echo " value = $value";
}

/* alt + shift + a (para adicionar um comentario de varias linhas) */
/* Utilizando a sintaxe curta
 $array = [
    "foo" =>(chave) "bar" (valor)
    "bar" => "foo"
 ];
    */
 
/* ANOTAÇÕES
-> da para adicionar outros vetores sendo chamado de matriz, podendo ser utilizado para guardar dados mais complexos.
->a cada virgula é um indice
->vai sempre pelo indice ou no caso do dicionario var ser pelo nome (e esse você pode escolher)
->tem que ter no dicionario ex:
$Dic = [
                 "nome" => "Joaquim",
                 "cidade" => "Bauru"
                 "Idade" => "25"
];
->
*/
 
/* CRIAÇÃO DE DICIONÁRIOS
  O DICIONÁRIO É VETOR QUE UTILIZA UMA CHAVE PARA IDENTIFICAR OS DADOS ARMAZENADOS
 */
 
 $dicionario = [
    "nome" => "Joaquim",
    "cidade" => "Bauru",
    "status" => 25,
    "salario" => 1312.54,
    1 => "exemplo"
 ];
 
 /* PARA IMPRIMIR UM DICIONARIO OU VETOR NA TELA, PODE-SE UTILIZAR OS COMANDOS
    PRINT_R E VAR_DUMP
 */
 
print_r($dicionario); //imprime os valores na tela
var_dump($dicionario); //imprime os valores e identifica os tipos de dados de cada um

/* funcoeções para utilizar com vetores */
$vet = [15,10,5];
array_push($vet,35,23,32); /* sintaxe array_push(vetora ser adicionada, valores, valores) */
 
/* arat reverse - inverte a ordem dos dados do vetor */
array_reverse($vet);
 
/* array sum - calcula a soma dos elementos de um array */
array_sum($vet);
 
/* sort - ordena os valores do array em ordem ascendente, modificando o array */
sort($vet);

 
?>