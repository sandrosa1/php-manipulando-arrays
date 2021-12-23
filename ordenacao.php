<?php

include __DIR__.'/nav.php';


echo '<h1 class="text-center mt-3 mb-3" >Funções de Ordenação</h1>';
echo '<h3>Modificam a estrutura do array</h3>';
echo '<hr>';
echo '<h2>Array de exemplo</h2>';

$array = [
    'Goiaba',
    'Morango',
    'limão',
    'Amora' 
];

echo '<pre>';
echo '<p> $array = '."['Goiaba','Morango','limão','Amora'];".'</p>';
echo '<p> print_r($array);</p>';
print_r($array);
echo '</pre>';
echo '<hr>';

//-----------------------------------------------------------------------//

echo '<h2>sort</h2>';

echo '<p>Ordena os valores do array em ordem crescente ou alfabetica. Vamos fazer uma copiá para não modificar o array de exemplo,</p>';

$arraySort= $array;
echo '<p>Obs: Altera o índice.</p>';
sort($arraySort);
echo '<pre>';
echo '<p class="blue"> $arraySort = $array;</p>';
echo '<p class="yellon"> sort($arraySort);</p>';
echo '<p> print_r($arraySort);</p>';
print_r($arraySort);
echo '</pre>';
echo '<hr>';

//---------------------------------------------------------------------------------//

echo '<h2>asort</h2>';

echo '<p>Ordena um array em ordem crescente ou alfabetica. Vamos fazer uma copiá para não modificar o array de exemplo.</p>';

$arrayAsort= $array;
echo '<p>Obs: Sem alterar o índice.</p>';
asort($arrayAsort);
echo '<pre>';
echo '<p class="blue"> $arrayAsort = $array;</p>';
echo '<p class="yellon"> asort($array);</p>';
echo '<p> print_r($array);</p>';
print_r($arrayAsort);
echo '</pre>';
echo '<hr>';


//-----------------------------------------------------------------------------------//


echo '<h2>rsort</h2>';
echo '<p>Ordena um array em ordem decrescente. Vamos fazer uma copiá para não modificar o array de exemplo.</p>';

$arrayRsort= $array;
echo '<p>Obs: Alterar o índice.</p>';

rsort($arrayRsort);
echo '<pre>';
echo '<p class="blue"> $arrayRsort = $array;</p>';
echo '<p class="yellon"> rsort($array);</p>';
echo '<p> print_r($arrayRsort);</p>';
print_r($arrayRsort);
echo '</pre>';
echo '<hr>';


//-----------------------------------------------------------------------------------//

echo '<h2>arsort</h2>';
echo '<p>Ordena um array em ordem decrescente ou alfabetica.Vamos fazer uma copiá para não modificar o array de exemplo.</p>';

$arrayArsort= $array;
echo '<p>Obs: Sem alterar o índice.</p>';

arsort($arrayArsort);
echo '<pre>';
echo '<p class="blue"> $arrayAsort = $array;</p>';
echo '<p class="yellon"> arsort($arrayArsort);</p>';
echo '<p> print_r($arrayArsort);</p>';
print_r($arrayArsort);
echo '</pre>';
echo '<hr>';

//-----------------------------------------------------------------------------------//
echo '<h2>Array associativo de exemplo</h2>';

$arrayAssociativo = [
    'nome'      => 'João',
    'idade'     => 25,
    'profissão' => 'Estudante',
    'instagram' => null,
    'adress'    => 'Rua madalena 33, São Paulo, SP'
];

echo '<pre>';
echo '<p> $arrayAssociativo = '."[
    'nome'      => 'João',
    'idade'     => 25,
    'profissão' => 'Estudante',
    'instagram' => null,
    'adress'    => 'Rua madalena 33, São Paulo, SP'
];".'</p>';
echo '<p> print_r($arraAssociativo);</p>';
print_r($arrayAssociativo);
echo '</pre>';
echo '<hr>';

//----------------------------------------------------------------------------------------------//

echo '<h2>ksort</h2>';
echo '<p>Ordena um array em ordem crescente pela chave. Vamos fazer uma copiá para não modificar o array de exemplo.</p>';

$arrayKsort = $arrayAssociativo;
ksort($arrayAssociativo);
echo '<pre>';
echo '<p class="blue"> $arrayKsort = $arrayAssociativo;</p>';
echo '<p class="yellon"> ksort($arrayKsort);</p>';
echo '<p> print_r($arrayKsort);</p>';
print_r($arrayKsort);
echo '</pre>';
echo '<hr>';

//-----------------------------------------------------------------------------------//

echo '<h2>krsort</h2>';
echo '<p>Ordena um array em ordem decrescente pela chave. Vamos fazer uma copiá para não modificar o array de exemplo.</p>';

$arrayKrsort = $arrayAssociativo;

krsort($arrayKrsort);
echo '<pre>';
echo '<p class="blue"> $arrayKrsort= $arrayAssociativo;</p>';
echo '<p class="yellon"> ksort($arrayKrsort);</p>';
echo '<p> print_r($arrayKrsort);</p>';
print_r($arrayKrsort);
echo '</pre>';
echo '<hr>';

//-----------------------------------------------------------------------------------//
echo '<h2>Array Multidimensional de exemplo</h2>';

$array = [
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
            'idade' => 26,
    
        ],
        
];

echo '<pre>';
echo '<p> $array = '."[
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
        'idade' => 26,

    ],
    
];".'</p>';
echo '<p> print_r($array);</p>';
print_r($array);
echo '</pre>';
echo '<hr>';
//------------------------------------//
echo '<h2>usort</h2>';
echo '<p>Ordena um array multidimencional pelo valor informado, está função espera uma callback como parametro. Vamos fazer uma copiá para não modificar o array de exemplo.</p>';
echo '<p>Obs:Altera o indice</p>';
$arrayMultidimencional = $array;

usort($arrayMultidimencional, function($a,$b)
{   
    if ($a['idade'] == $b['idade']) {
    return 0;
    }
    //ORDEM DECRESCENTE
    //return ($a['idade'] < $b['idade']) ? 1 : -1;

    //ORDEM CRESCENTE
    return ($a['idade'] < $b['idade']) ? -1 : 1;
    

});


echo '<pre>';
echo '<p class="blue"> $arrayMultidimencional = $array;</p>';
echo "<p class='yellon'>usort(".'$arrayMultidimencional'.", <span class='blue'>function(".'$a,$b'.")
{   
    if (".'$a'."['idade'] == ".'$b'."['idade']) {
    return 0;
    }
    //ORDEM DECRESCENTE
    //return (".'$a'."['idade'] < ".'$b'."['idade']) ? 1 : -1;

    //ORDEM CRESCENTE
    return (".'$a'."['idade'] < ".'$b'."['idade']) ? -1 : 1;
    

}</span>);</p><br>";
echo '<p> print_r($arrayMultidimencional);</p>';
print_r($arrayMultidimencional);
echo '</pre>';
echo '<hr>';

//-----------------------------------------------------------------------------------//

echo '<h2>uasort</h2>';
echo '<p>Ordena um array multidimencional pelo valor infomado. Vamos fazer uma copiá para não modificar o array de exemplo.</p>';
echo '<p>Obs: Não altera o indice</p>';
$arrayMultidimencional = $array;

uasort($arrayMultidimencional, function($a,$b)
{   
    if ($a['idade'] == $b['idade']) {
    return 0;
    }
    
    //ORDEM CRESCENTE
    return ($a['idade'] < $b['idade']) ? -1 : 1;
    //ORDEM DECRESCENTE
    //return ($a['idade'] < $b['idade']) ? 1 : -1;

});


echo '<pre>';
echo '<p class="blue"> $arrayMultidimencional = $array;</p>';
echo "<p class='yellon'>uasort(".'$arrayMultidimencional'.", <span class='blue'>function(".'$a,$b'.")
{   
    if (".'$a'."['idade'] == ".'$b'."['idade']) {
    return 0;
    }
    //ORDEM DECRESCENTE
    //return (".'$a'."['idade'] < ".'$b'."['idade']) ? 1 : -1;

    //ORDEM CRESCENTE
    return (".'$a'."['idade'] < ".'$b'."['idade']) ? -1 : 1;
    

}</span>);</p><br>";
echo '<p> print_r($arrayMultidimencional);</p>';
print_r($arrayMultidimencional);
echo '</pre>';
echo '<hr>';


//-----------------------------------------------------------------------------------//
echo '<h2>Array de exemplo</h2>';
$array = [
    'Goiaba',
    'Morango',
    'limão',
    'Amora' 
];


echo '<pre>';
echo '<p> $array = '."['Goiaba','Morango','limão','Amora'];".'</p>';
echo 'print_r($array);';
print_r($array);
echo '</pre>';
echo '<hr>';
//-----------------------------------------------------------------------------------------//
echo '<h2>Shuffle</h2>';
echo '<p>Desordena um array</p>';

shuffle($array);

echo '<pre>';
echo '<p class="yellon"> shuffle($array);</p>';
echo 'print_r($array);<br>';
print_r($array);
echo '</pre>';
echo '<hr>';


//-----------------------------------------------------------------------------------//
echo '<h2>Array de exemplo</h2>';
$array = [
    '10,0',
    '2.0',
    '0.5',
    '1,0' 
];
echo '<pre>';
echo '<p> $array = '."['10,0','2.0','0.5','1,0' ];".'</p>';
echo 'print_r($array);';
print_r($array);
echo '</pre>';
print_r($array);
echo '</pre>';
echo '<hr>';

//--------------------------------------------------------------------------------//
echo '<h2>Natsort</h2>';
echo '<p>Ordenas doubles e floats com virgula ou ponto</p>';

Natsort($array);

echo '<pre>';
echo '<p class="yellon"> Natsort($array);</p>';
echo 'print_r($array);<br>';
print_r($array);
echo '</pre>';
echo '<hr>';
//-----------------------------------------------------------------------------------//
echo '<h2>Array de exemplo</h2>';
$array = [
    'SaNdro',
    'antÔnia',
    'Pedro',
    'tHereza' 
];
echo '<pre>';
echo '<p> $array = '."['SaNdro','antÔnia','Pedro','tHereza'];".'</p>';
echo 'print_r($array);';
print_r($array);
echo '</pre>';
echo '<hr>';

//----------------------------------------------------------------------------------------//
echo '<h2>Natcasesort</h2>';
echo '<p>Ordena por case sensitive</p>';

Natsort($array);

echo '<pre>';
echo '<p class="yellon"> Natsort($array);</p>';
echo 'print_r($array);<br>';
print_r($array);
echo '</pre>';
echo '<hr>';


include __DIR__.'/footer.php';
