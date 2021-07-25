<?php

use function PHPSTORM_META\type;

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolecente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if (empty($nome)) {
    echo 'O nome não pode ser vazio';
    return;
}
if (strlen($nome) < 3 || strlen($nome) > 41) {
    echo 'O nome deve ter entre 4 e 40 characteres';
    return;
}
if(!is_numeric($idade))
{
    echo 'Informe um número para idade';
    return;
}

//var_dump($nome);
//var_dump($idade);

if ($idade >= 6 && $idade <= 12) {
    for ($i = 0; $i < count($categorias); $i++) {
        if ($categorias[$i] == 'infantil')
            echo "O nadador ", $nome, " compete na categoria ", $categorias[$i];
    }
    //echo 'infantil';
} else if ($idade >= 13 && $idade <= 17) {
    //echo 'adolecente';
    for ($i = 0; $i < count($categorias); $i++) {
        if ($categorias[$i] == 'adolecente')
            echo "O nadador ", $nome, " compete na categoria ", $categorias[$i];
    }
} else {
    //echo 'adulto';
    for ($i = 0; $i < count($categorias); $i++) {
        if ($categorias[$i] == 'adulto')
            echo "O nadador ", $nome, " compete na categoria ", $categorias[$i];
    }
}
return 0;
