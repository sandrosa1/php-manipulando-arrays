<?php
include __DIR__.'/nav.php';


echo '<h1 class="text-center mt-3 mb-3" >Definicão</h1>';

echo '<h2>Lista Ordenada</h2>';

$arrayOrdenado = [
    'banana',
    'Morango',
    'limão'
];

echo '<pre>';
echo '<p> $arrayOrdenado = '."['banana','Morango','limão']".';</p>';
echo '<p> print_r($arrayOrdenado);</p>';
print_r($arrayOrdenado);
echo '</pre>';

//------------------------------------------------------------------------------------------------------------//

echo '<hr>';

echo '<h2>Array associativo</h2>';

$arrayAssociativo = [
    'nome'      => 'João',
    'idade'     => 25,
    'profissão' => 'Estudante'
];

echo '<pre>';
echo '<p> $arrayAssociativo = '."['nome' => 'João','idade' => 25,'profissão' => 'Estudante'];".';</p>';
echo '<p> print_r($arrayAssociativo);</p>';
print_r($arrayAssociativo);
echo '</pre>';
echo '<hr>';

//---------------------------------------------------------------------------------------------------------//

echo '<h2 class="red">Não utilizar Array desde modo</h2>';

$array = [
    19 => 'teste',
    'nome'      => 'João',
    'idade'     => 25,
    'profissão' => 'Estudante',
    'banana',
    'Morango',
    'limão'
];

echo '<pre>';
echo '<p> $array = '."[19 => 'teste','nome'=> 'João','idade'=> 25,
            'profissão' => 'Estudante','banana','Morango','limão'];".';</p>';
echo '<p> print_r($array);</p>';
print_r($array);
echo '</pre>';
echo '<hr>';

//---------------------------------------------------------------------------------------------------------//


echo '<h2>Adicionado valores na lista Ordenada</h2>';

$array = [
    'banana',
    'Morango',
    'limão'
];



echo '<pre>';
echo '<p> $array = '."['banana','Morango','limão'];".';</p>';
echo '<p> print_r($array);</p>';
print_r($array)."<br>";

$array [] = 'pera';
$array [7] = 'banana maça';

echo '<p> Adiciona no fim do indíce</p>';
echo ' $array []'." = 'pera';<br>";
echo '<p> Adiciona no indíce especificado.</p>';
echo ' $array [7]'." = 'banana maça';<br>";
echo '<p> print_r($array);</p>';
print_r($array);
echo '<p> Substitui o item pelo novo</p>';
echo ' $array [3]'." = 'Manga';<br>";
echo '<p> print_r($array);</p>';
$array [3] = 'Manga';
print_r($array);
echo '</pre>';
echo '<hr>';

//--------------------------------------------------------------------------------------//

echo '<h2>Adicionando valores a um array associativo</h2>';

$array = [
    'nome'      => 'João',
    'idade'     => 25,
    'profissão' => 'Estudante'
];

echo '<pre>';
echo '<p> $array = '."['nome' => 'João','idade' => 25,'profissão' => 'Estudante'];".';</p>';
echo '<p> print_r($array);</p>';
print_r($array);

$array ['instagram'] = '@joseoficial';
$array ['LinKedin']  = 'linKedin@Linkedin';
$array [] = 'Não faça isso';
echo ' $array'." ['instagram'] = '@joseoficial';<br>".
      ' $array'." ['LinKedin']  = 'linKedin@Linkedin';<br>".
      ' $array'." [] = 'Não faça isso';<br>";
echo '<p> print_r($array);</p>';

print_r($array);
echo '</pre>';

echo '<hr>';

//--------------------------------------------------------------------------------------------//

echo '<h2>Array Multidimensional</h2>';

$array = [
    'pessoas' => [
        [ 
            'id'    => 1,
            'nome'  => 'João',
            'idade' => 25,
    
        ],
        [ 
            'id'    => 2,
            'nome'  => 'Manoel',
            'idade' => 31,
    
        ],
        [ 
            'id'    => 3,
            'nome'  => 'Maria',
            'idade' => 21,
    
        ],
        
    ]
];


echo '<pre>';
echo '<p> $array = '."[
    'pessoas' => [
        [ 
            'id'    => 1,
            'nome'  => 'João',
            'idade' => 25,
    
        ],
        [ 
            'id'    => 2,
            'nome'  => 'Manoel',
            'idade' => 31,
    
        ],
        [ 
            'id'    => 3,
            'nome'  => 'Maria',
            'idade' => 21,
    
        ],
        
    ]
];".';</p>';
echo '<p> print_r($array);</p>';
print_r($array);
echo '</pre>';

echo '<hr>';

//-----------------------------------------------------------------------------//

echo '<h2>Obtendo valores pessoas do array Multidimensional</h2>';

echo '<pre>';
echo "<p> print_r(".'$array'."['pessoas']);</p>";
print_r($array['pessoas']);
echo '</pre>';
echo '<hr>';

//-----------------------------------------------------------------------------//


echo '<h2>Obtendo o nome da posição 2 do array Multidimensional</h2>';

echo '<pre>';
echo "<p> print_r(".'$array'."['pessoas'][2]['nome']);</p>";
print_r($array['pessoas'][2]['nome']);
echo '</pre>';
echo '<hr>';


include __DIR__.'/footer.php';