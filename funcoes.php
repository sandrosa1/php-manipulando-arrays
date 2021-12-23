<?php
include __DIR__.'/nav.php';


echo '<h1>Funções nativas PHP que retornam valores.</h1>';


$array1 = [
    'banana',
    'Morango',
    'limão',
    'Laranja',
    'Morango'
];

$array2 = [
    'banana',
    'Morango',
    'limão',
    'Laranja' 
];
echo '<h2>Array de exemplo 1</h2>';
echo '<pre>';
echo '<p> $array1 = '."['banana','Morango','limão','Laranja','Morango'];".'</p>';
echo 'print_r($array1);<br>';
print_r($array1);
echo '</pre>';

echo '<h2>Array de exemplo 2</h2>';
echo '<pre>';
echo '<p> $array2 = '."['banana', 'Morango', 'limão','Laranja'];".'</p>';
echo 'print_r($array2);<br>';
print_r($array2);
echo '</pre>';


echo '<h2>Array assosiativo</h2>';

$arrayAssociativo = [
    'nome'      => 'João',
    'idade'     => 25,
    'profissão' => 'Estudante',
    'instagram' => null
];

echo '<pre>';
echo '<p> ($arrayAssociativo  = '."['nome' => 'João', 'idade' => 25,'profissão' => 'Estudante', 'instagram' => null];".'</p>';
echo 'print_r($arrayAssociativo );<br>';
print_r($arrayAssociativo );
echo '</pre>';


echo '<h2>count</h2>';

echo '<pre>';
echo '<p class="yellon">  echo count($array1);</p>';
echo 'Resultado = '. count($array1);
echo '<p class="yellon">  echo count($array2);</p>';
echo 'Resultado = '. count($array2);
echo '<p class="yellon">  echo count($arrayAssociativo);</p>';
echo 'Resultado = '.count($arrayAssociativo);
echo '</pre>';

echo '<hr>';
//----------------------------------------------------------------------------//

echo '<h2>array_keys</h2>';

echo '<p>Cria uma lista ordenada com as posições da lista ordenada</p>';
echo '<p>Obs: Ele altera o array que for passado como parâmetro</p>';
echo '<pre>';
echo '<p class="yellon"> $arrayLista = array_keys($array1);</p>';
$arrayLista = array_keys($array1);
echo  'print_r($arrayLista);<br>';
print_r(array_keys($arrayLista));
echo  'print_r($array1);<br>';
print_r(array_keys($array1));
echo '</pre>';

echo '<p>Cria uma lista ordenada com as as chaves do array associativo</p>';

echo '<pre>';
echo '<p class="yellon">print_r(array_keys($arrayAssociativo));</p><br>';
print_r(array_keys($arrayAssociativo));
echo '</pre>';
echo '<hr>';

//------------------------------------------------------------------------------//

echo '<h2>Array Value</h2>';

echo '<p>Cria uma lista ordenada com as valores do array associativo</p>';


echo '<pre>';
echo '<p class="yellon"> print_r(array_values($arrayAssociativo));</p>';
print_r(array_values($arrayAssociativo));
echo '</pre>';
echo '<hr>';
//------------------------------------------------------------------------------//

echo '<h2>In Array</h2>';

echo '<p>Verifica se um item esta dentro do Array e retorna 1 ou Nada, true ou false se existir. (Ex:Morango).</p>';

echo '<pre>';
echo '<p class="yellon">'." print_r(in_array('Morango'".',$array1));</p>';
print_r(in_array('Morango',$array1));
echo '<p class="yellon">'." print_r(in_array('Manga'".',$array1));</p>';
print_r(in_array('Manga',$array1));
echo '<p class="yellon">'." var_dump(in_array('Morango'".',$array1));;</p>';
var_dump(in_array('Morango',$array1));
echo '<p class="yellon">'." var_dump(in_array('Manga'".',$array1));;</p>';
var_dump(in_array('Manga',$array1));
echo '<br>';

echo '<p>Verifica se o VALOR esta dentro do Array assosiativo e retorna 1 ou Nada,
true ou false se existir (Ex:Estudante).</p>';
echo '<p class="yellon">'." print_r(in_array('Estudante'".',$arrayAssociativo));</p>';
print_r(in_array('Estudante',$arrayAssociativo));
echo '<p class="yellon">'." var_dump(in_array('Estudante'".',$arrayAssociativo));</p>';
var_dump(in_array('Estudante',$arrayAssociativo));
echo '</pre>';

echo '<hr>';
//------------------------------------------------------------------------------//

echo '<h2>Search</h2>';

echo '<p> Trás o índice se existir o elemento dentro do array (Ex:Morango) caso nao exista retona falso(nada).</p>';
echo '<p> OBS. Sé existir dois elementos repetidos ele trás o índice do primeiro elemento.(Ignora os demais)</p>';

echo '<pre>';
echo '<p class="yellon">'." print_r(array_search('Morango'".',$array1);</p>';
print_r(array_search('Morango',$array1));
echo '<p class="yellon">'." print_r(array_search('Manga'".',$array1);</p>';
print_r(array_search('Manga',$array1));
echo '</pre>';

echo '<p> Trás a chave se existir o elemento dentro do array (Ex:Estudante) caso nao exista retona false.</p>';

echo '<pre>';
echo '<p class="yellon">'." print_r(array_search(('Estudante'".',$arrayAssociativo));</p>';
print_r(array_search('Estudante',$arrayAssociativo));
echo '</pre>';
echo '<hr>';
//------------------------------------------------------------------------------//

echo '<h2>Isset</h2>';

echo '<p>Verifica se existe um valor na posição do Array e retorna 1 ou Nada, true ou false.</p>';

echo '<pre>';
echo '<p class="yellon"> print_r(isset($array[2]));</p>';
print_r(isset($array1[2]));
echo '<p class="yellon"> var_dump(isset($array[2]));</p>';
var_dump(isset($array1[2]));
echo '</pre>';

echo '<p>Verifica se p valor esta dentro do Array assosiativo e retorna 1 ou Nada, true ou false.</p>';
echo "<p>Obs Sé a posição for igual a null ele retorna nada ou false. ('posicao' => null)</p>";


echo '<pre>';
echo '<p class="yellon">'." print_r(isset(".'$arrayAssociativo'."['profissão']));</p>";
print_r(isset($arrayAssociativo['profissão']));
echo '<p class="yellon">'." var_dump(isset(".'$arrayAssociativo'."['profissão']));</p>";
var_dump(isset($arrayAssociativo['profissão']));
echo '</pre>';

echo '<hr>';
//------------------------------------------------------------------------------//

echo '<h2>Array key Exists</h2>';

echo '<p>Verifica se uma posição existe no Array e retorna 1 ou Nada, true ou false se existir. (Ex:Morango).</p>';

echo '<pre>';
echo '<p class="yellon">'." print_r(array_key_exists(1,".'$array1'."));</p>";
print_r(array_key_exists(1,$array1));
echo '<p class="yellon">'." var_dump(array_key_exists(1,".'$array1'."));</p>";
var_dump(array_key_exists(1,$array1));
echo '</pre>';

echo '<p>Verifica se a posição esta dentro do Array assosiativo e retorna 1 ou Nada, true ou false</p>';
echo "<p>Obs Sé a posição for igual a null ele retorna 1 ou true ('posicao' => null)</p>";

echo '<pre>';
echo '<p class="yellon">'." print_r(array_key_exists('instagram',".'$arrayAssociativo'."));</p>";
print_r(array_key_exists('instagram',$arrayAssociativo));
echo '<p class="yellon">'." var_dump(array_key_exists('instagram',".'$arrayAssociativo'."));</p>";
var_dump(array_key_exists('instagram',$arrayAssociativo));
echo '</pre>';

echo '<hr>';
//------------------------------------------------------------------------------//

echo '<h2>Array key First</h2>';
echo '<p>Somente versões >= que PHP 7.3</p>';
echo '<p>Retorna o primeiro valor do array</p>';

echo '<pre>';
echo '<p class="yellon"> echo  array_key_first($arrayAssociativo);</p>';
echo  array_key_first($arrayAssociativo);
echo '</pre>';

echo '<p>Para versões < que PHP 7.3</p>';

echo '<pre>';
echo '<p class="yellon"> echo  reset(array_keys($arrayAssociativo));</p>';
echo  reset(array_keys($arrayAssociativo));
echo '</pre>';

echo '<h2>Array key Last</h2>';
echo '<p>Somente versões >= que PHP 7.3</p>';

echo '<pre>';
echo '<p class="yellon"> echo  array_key_last($arrayAssociativo);</p>';
echo '<p>Retorna o ultimo valor do array</p>';
echo  array_key_last($arrayAssociativo);
echo '</pre>';

echo '<p>Para versões < que PHP 7.3</p>';

echo '<pre>';
echo '<p class="yellon"> echo  end(array_keys($arrayAssociativo));</p>';
echo  end(array_keys($arrayAssociativo));
echo '</pre>';

echo '<hr>';
//------------------------------------------------------------------------------//

echo '<h2>Array Flip</h2>';
echo '<p>Inverte as chaves com os valores.</p>';
echo '<p>Obs: Não usar em array com posições null.</p>';


echo '<pre>';
echo '<p class="yellon"> print_r($array2);</p>';
print_r($array2);
echo '</pre>';

echo '<pre>';
echo '<p class="yellon"> print_r(array_flip($array2));</p>';
print_r(array_flip($array2));
echo '</pre>';
echo '<hr>';
//------------------------------------------------------------------------------//

echo '<h2>Implode</h2>';
echo '<p>Concatena todos os dados de um array transformando em uma string utilizando o separador desejado</p>';

echo '<pre>';
echo "<p class='yellon'> echo implode(' - '".',$array2'.");</p>";
echo implode(' - ',$array2);
echo '</pre>';

echo '<hr>';
//------------------------------------------------------------------------------//

echo '<h2>Explode</h2>';
echo '<p>Transforma uma string em um array limitado por um separador(Ex: banana, limitador a)</p>';

echo '<pre>';
echo "<p class='yellon'> print_r(explode('a','banana'));</p>";
print_r(explode('a','banana'));
echo '</pre>';

include __DIR__.'/footer.php';
