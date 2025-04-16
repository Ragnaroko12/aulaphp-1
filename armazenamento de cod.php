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

session_start(); // inicializa uma sessão


$_SESSION['nome']; // cria uma variavel superglobsl do tipo vetor e armazena um valor

header("location: nome do arquivo"); // envia os dadps para um arquivo

/*----------------------------------------------------------------------------------------
file_put_contents cria,sobrescreve ou abre um arquivo 
caso tenha a nescessidade de adicionar um texto sem sobreescrever oq ja está dentro do 
arquivo é nescessario usar */FILE_APPEND;

 file_put_contents("nome_do_arquivo.txt", "texto que você quer salvar");

/*
file_get_contents é quase igual ao comando de cima 
porem ele armazena o texto do arquivo em uma variavel
*/

 $texto = file_get_contents("tarefas.txt");

 trim($tarefas); //remove espaços em branco no começo/fim da string (inclusive quebras de linha).

htmlspecialchars($tarefas); //impede que alguém insira código malicioso no campo de tarefa (ex: <script>).


/* explode() Serve pra dividir uma string em partes, com base em algum caractere.
No nosso caso, a gente usa \n (quebra de linha) pra separar as tarefas do arquivo em uma lista.
*/
explode("/n",$texto);

/* isset() é uma função do PHP que serve para verificar se uma variável 
foi definida e não é nula. Ela retorna true se a variável existe e contém algum valor,
 e retorna false se a variável não existe ou se o valor dela for null
*/
   $nome = "João";

   if (isset($nome)) {
      echo "A variável nome está definida e não é nula.";
   } else {
      echo "A variável nome não está definida ou é nula.";
   }









?>