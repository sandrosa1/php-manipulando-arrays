<?php
include __DIR__.'/nav.php';


echo '<h1 class="text-center mt-3 mb-3">Manipulação de dados em array</h1>';

echo '<h3>Modificando a estrutura do array</h3>';

echo '<h3>Array 1 de exemplo</h3>';

$array1 = [
    '10',
    '11',
    '11',
    '13',
    '14',
    '15',
    '15'
];

echo '<pre>';
echo ' $array1'." = ['10','11','11','13','14','15','15'];<br>";
echo ' print_r($array1);<br>';
print_r($array1);
echo '</pre>';
echo '<hr>';
//-----------------------------------------------------------------------------------------//

echo '<h3>Array 2 associativo de exemplo </h3>';

$array2 = [
    'nome'      => 'João',
    'idade'     => '0',
    'profissão' => false,
    'Escolaridade' =>null
];

echo '<pre>';
echo ' $array2'." = ['nome' => 'João','idade' => '0', 'profissão' => false, 'Escolaridade' =>null];<br>";
echo ' print_r($array2);<br>';
print_r($array2);
echo '</pre>';
echo '<hr>';
//-------------------------------------------------------------------------------------------------//
echo '<h3>Arrays 3 e 4 de exemplos</h3>';

$array3 = [
    10,
    15,
    25
];

$array4 = [
    10,
    17,
    22,
    26
];

echo '<pre>';
echo ' $array3'." = [10,15,25];<br>";
echo ' print_r($array3);<br>';
print_r($array3);
echo ' $array4'." =  [10,17,22,26];<br>";
echo ' print_r($array4);<br>';
print_r($array4);
echo '</pre>';
echo '<hr>';
//------------------------------------------------------------------------------------------//

echo '<h3>Array 6 Multidimensional exemplo</h3>';

$array5 = [
        [ 
            'id'    => 2,
            'nome'  => 'Manoel',
            'idade' => 31,
    
        ],
        [ 
            'id'    => 1,
            'nome'  => 'João',
            'idade' => 25,
    
        ],
        [ 
            'id'    => 3,
            'nome'  => 'Maria',
            'idade' => 21,
    
        ],
        
];

echo '<pre>';
echo ' $array5'." =  [
    [ 
        'id'    => 2,
        'nome'  => 'Manoel',
        'idade' => 31,

    ],
    [ 
        'id'    => 1,
        'nome'  => 'João',
        'idade' => 25,

    ],
    [ 
        'id'    => 3,
        'nome'  => 'Maria',
        'idade' => 21,

    ],
    
];
<br>";
echo ' print_r($array5);<br>';
print_r($array5);
echo '</pre>';
echo '<hr>';

//-----------------------------------------------------------------------------//
echo '<h3>Arrays de exemplo</h3>';

$array6 = [
    1,
    10,
    23
];

$array7 = [
    1,
    10,
    23
];
echo '<pre>';
echo ' $array6'." = [ 1, 10, 23 ]; <br>";
echo ' print_r($array6);<br>';
print_r($array6);
echo ' $array7'." = [ 1, 10, 23 ]; <br>";
echo ' print_r($array7);<br>';
print_r($array7);
echo '</pre>';
echo '<hr>';

//----------------------------------------------------------------------------------//

echo '<h2>array_unique</h2>';
echo '<p>Esta função cria um array a partir de outro sem repetições</p>';
$arrayUnique = array_unique($array1);

echo '<pre>';
echo '<p class="yellon"> $arrayUnique = array_unique($array);</p>';
echo ' print_r($arrayUnique);<br>';
print_r($arrayUnique);
echo '</pre>';
echo '<hr>';

//-----------------------------------------------------------------------------------//

echo '<h2>array_filter</h2>';
echo '<p>cria um array filtrado os valores 0, null ou false de um array</p>';

echo '<pre>';
print_r($array3);
$arrayFilter = array_filter($array2);
echo ' print_r($arrayFilter);<br>';
print_r($arrayFilter);
echo '</pre>';
echo '<hr>';

//-----------------------------------------------------------------------------------//

echo '<h2>array_filter com call back</h2>';
echo '<p>Cria um array filtrado os valores especificados através de um call back</p>';

$arrayFilter = array_filter($array2,function($valeu){
    //PODE VALIDAR POR NOME, ID, CHAVE 
    return !is_null($valeu);
});

echo '<pre>';
echo '<p class="yellon"> $arrayFilter = array_filter($array2,<span class="blue"> function($valeu){
    //PODE VALIDAR POR NOME, ID, CHAVE 
    return !is_null($valeu);
}</span>);</p>';
echo ' print_r($arrayFilter);<br>';
print_r($arrayFilter);
echo '</pre>';
echo '<hr>';

//-----------------------------------------------------------------------------------//


echo '<h2>array_diff</h2>';
echo '<p>Cria um array com os valores diferentes comparado o array3  com array4</p>';
echo '<pre>';
echo '<p class="yellon"> $arrayDiff = array_diff($array3,$array4);</p>';
$arrayDiff = array_diff($array3,$array4);
echo ' print_r($arrayDiff);<br>';
print_r($arrayDiff);
echo '</pre>';
echo '<hr>';

//---------------------------------------------------------------------------------------//

echo '<p>Cria um array com os valores diferentes  comparado o array4 com array3</p>';

echo '<pre>';
echo '<p class="yellon"> $arrayDiff = array_diff($array4,$array3);</p>';
$arrayDiff = array_diff($array4,$array3);
echo ' print_r($arrayDiff);<br>';
print_r($arrayDiff);
echo '</pre>';
echo '<hr>';

//-----------------------------------------------------------------------------------//


echo '<h2>array_intersect</h2>';
echo '<p>Cria um array com os valores iguais comparado o array3  com arra5</p>';

echo '<pre>';
echo '<p class="yellon"> $arrayInt = array_intersect($array3,$array4);;</p>';
$arrayInt = array_intersect($array3,$array4);
echo ' print_r($arrayInt);<br>';
print_r($arrayInt);
echo '</pre>';
echo '<hr>';
//-----------------------------------------------------------------------------------//

echo '<h2>Array Column</h2>';
echo '<p>cria um array com as coluna requerida</p>';

echo '<pre>';
echo '<p class="yellon"> $arrayColumn = array_column($array5,'." 'nome'".');</p>';
$arrayColumn = array_column($array5, 'nome');
echo ' print_r($arrayColumn);<br>';
print_r($arrayColumn);
echo '</pre>';
echo '<hr>';
//-----------------------------------------------------------------------------------//

echo '<h2>array_combine</h2>';
echo '<p>Combina dois array do mesmo tamanho</p>';

echo '<pre>';
echo '<p class="yellon"> $arrayColu = array_combine($array6, $array7);</p>';
//PRIMEIRO DESEJADO PARA CHAVE, SEGUNDO O VALOR
$arrayColu = array_combine($array6, $array7);
echo ' print_r($arrayColu);<br>';
print_r($arrayColu);
echo '</pre>';
echo '<hr>';

//-----------------------------------------------------------------------------------//

echo '<h2>array_combine com array_column</h2>';
echo '<p>Podemes deixar os IDs com chaves e  o nome como valor</p>';

echo '<pre>';
echo '<p class="yellon"> $keys = array_column($array5, '."'id'".');</p>';
$keys = array_column($array5, 'id');
echo '<p class="yellon"> $values = array_column($array5, '."'nome'".');</p>';
$values = array_column($array5, 'nome');
echo '<p class="yellon"> $arrayC = array_combine($keys, $values);</p>';
//PRIMEIRO DESEJADO PARA CHAVE, SEGUNDO O VALOR
$arrayC = array_combine($keys, $values);
echo ' print_r($arrayC);<br>';
print_r($arrayC);
echo '</pre>';
echo '<hr>';
//-----------------------------------------------------------------------------------//


echo '<h3>Arrays 8 e 9 de exemplo</h3>';

$array8 = [
    'Willian',
    'Alberto',
    'Marcia',
    'Maria'
];

$array9 = [
    'Alfredo',
    'Bruno',
    'Maria'
];

echo '<pre>';
echo ' $array8'." = ['Willian', 'Alberto','Marcia','Maria'];<br>";
echo ' print_r($array8);<br>';
print_r($array8);
echo ' $array9'." = ['Alfredo','Bruno','Maria'];<br>";
echo ' print_r($array9);<br>';
print_r($array9);
echo '</pre>';
echo '<hr>';

//------------------------------------------------------------------------------------------//

echo '<h2>array_merge</h2>';
echo '<p>Combina dois array</p>';

echo '<pre>';
echo '<p class="yellon"> $arrayMerge = array_merge($array8, $array9);</p>';
$arrayMerge = array_merge($array8, $array9);
echo ' print_r($arrayMerge);<br>';
print_r($arrayMerge);
echo '</pre>';
echo '<hr>';

//-----------------------------------------------------------------------------------//
echo '<h3>Array 10 de exemplo</h3>';

$array10 = [
    'A',
    'B',
    'C'
];

echo '<pre>';
echo ' $array10'." = ['A','B','C'];<br>";
echo ' print_r($array10);<br>';
print_r($array10);
echo '</pre>';

//--------------------------------------------------------------------------------------//

echo '<h2>array_pad</h2>';
echo '<p>Cria um array com o número de posição nescessárias</p>';

echo '<pre>';
echo '<p class="yellon"> $arrayColu = array_pad($array10,10,'."'sem dados'".');</p>';
//PRIMEIRO valor e o array, SEGUNDO O tamanho
$arrayPad = array_pad($array10,10,'sem dados');
echo ' print_r($arrayColu);<br>';
print_r($arrayPad);
echo '</pre>';
echo '<hr>';

//-----------------------------------------------------------------------------------//

echo '<h2>array_shift</h2>';
echo '<p>Segue o padrão de fila retirado o primerio elemento da fila</p>';
$array = [
    'A',
    'B',
    'C'
];
echo '<pre>';
echo ' $array'." = ['A','B','C'];<br>";
echo ' print_r($array);<br>';
print_r($array);
echo '<p class="yellon"> $arrayShift = array_shift($array10);</p>';
$arrayShift = array_shift($array);
echo 'Retirando o primeiro elemento da fila -> '.$arrayShift.'<br>';

echo 'Fila atual <br>';
echo ' print_r($array);<br>';
print_r($array);
echo '</pre>';
echo '<hr>';

//-----------------------------------------------------------------------------------//
echo '<h2>array_unshift</h2>';

$array = [
    'A',
    'B',
    'C'
];
echo '<pre>';
echo ' $array'." = ['A','B','C'];<br>";
echo ' print_r($array);<br>';
print_r($array);

echo '<p>Inseri um valor no inicio da fila</p>';
echo '<p class="yellon"> $arrayShift = array_unshift($array,'."'W'".');</p>';
$arrayShift = array_unshift($array,'W');
echo '<pre>';
echo 'Inserindo (W) no inicio da fila';
echo '</pre>';

echo 'Fila atual <br>';
echo ' print_r($array);<br>';
print_r($array);
echo '</pre>';
echo '<hr>';

//-----------------------------------------------------------------------------------//
echo '<h2>array_pop</h2>';

$array = [
    'A',
    'B',
    'C'
];
echo '<pre>';
echo ' $array'." = ['A','B','C'];<br>";
echo ' print_r($array);<br>';
print_r($array);
echo '<p>Tirar o último da fila</p>';
echo '<p class="yellon"> $arrayPop = array_pop($array6);</p>';
$arrayPop = array_pop($array6);
echo ' O último da fila -> '.$arrayPop.'<br>';

echo ' Fila atual <br>';
echo ' print_r($array);<br>';
print_r($array);
echo '</pre>';
echo '<hr>';
//-----------------------------------------------------------------------------------//

echo '<h2>unset</h2>';

$array = [
    'A',
    'B',
    'C'
];
echo '<pre>';
echo ' $array'." = ['A','B','C'];<br>";
echo ' print_r($array);<br>';
print_r($array);

echo '<p>Apaga o valor indicado de um array</p>';
echo '<p class="yellon"> unset($array[1]);</p>';
unset($array[1]);
echo 'Tirando tirando o elemento da posição 1';

echo ' Fila atual <br>';
echo ' print_r($array);<br>';
print_r($array);
echo '</pre>';
echo '<hr>';

//-----------------------------------------------------------------------------------//


echo '<h2>array_map</h2>';
echo '<p>Cria um array mapeado com as alterações desejadas, ou adicionando novos elementos</p>';

$map = array_map(function($value){
    $value['nome'] = strtolower($value['nome']);
    $value['novo'] = rand(100,200);

    return $value;
},$array5);

echo '<pre>';
echo '<p class="yellon"> $map = array_map(<span class="blue"> function($value){
    $value['."'nome'".'] = strtolower($value['."'nome'".']);
    $value['."'novo'".'] = rand(100,200);
    return $value;
},</span>$array5);</p>';
echo ' print_r($map);<br>';
print_r($map);
echo '</pre>';
echo '<hr>';

//------------------------------------------------------------------------------------------------//

echo '<h2>array_reduce</h2>';
echo '<p>Tem como objetivo reduzir o array a um único valor utilizando alguma operação aritmética.</p>';
echo '<pre>';

$filmes = [
    [
        'titulo' => 'Vingadores: Ultimato',
        'imdb' => 8.4,
        'faturamento_us' => 858300000,
        'faturamento_br' => 85660000
    ],
    [
        'titulo' => 'Avatar',
        'imdb' => 7.8,
        'faturamento_us' => 760500000,
        'faturamento_br' => 58210000
    ],
    [
        'titulo' => 'Titanic',
        'imdb' => 7.8,
        'faturamento_us' => 659360000,
        'faturamento_br' => 70460000
    ],
];
echo ' $filmes'." = [
    [
        'titulo' => 'Vingadores: Ultimato',
        'imdb' => 8.4,
        'faturamento_us' => 858300000,
        'faturamento_br' => 85660000
    ],
    [
        'titulo' => 'Avatar',
        'imdb' => 7.8,
        'faturamento_us' => 760500000,
        'faturamento_br' => 58210000
    ],
    [
        'titulo' => 'Titanic',
        'imdb' => 7.8,
        'faturamento_us' => 659360000,
        'faturamento_br' => 70460000
    ],
];<br>";
echo ' print_r($filmes);<br>';
print_r($filmes);
echo '<p class="yellon"> $totalFaturamentoBR = array_reduce($filmes, <span class="blue"> function ($total, $filme) {
    $total += $filme['."'faturamento_br'".'];
    return $total;
}, </span>0);</p>';

$totalFaturamentoBR = array_reduce($filmes, function ($total, $filme) {
    $total += $filme['faturamento_br'];
    return $total;
}, 0);
echo ' print_r($totalFaturamentoBR);;<br>';

print_r($totalFaturamentoBR);
echo '</pre>';

include __DIR__.'/footer.php';
