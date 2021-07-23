<?php
    $categorias = [];
    $categorias[] = 'infantil';
    $categorias[] = 'adolecente';
    $categorias[] = 'adulto';
    $categorias[] = 'idoso';

    //print_r($categorias);

    $nome = 'Eduardo';
    $idade = 18;
    //var_dump($nome);
    //var_dump($idade);
    if($idade >= 6 && $idade <=12)
    {
        for ($i=0; $i < count($categorias) ; $i++) { 
            if($categorias[$i] == 'infantil')
                echo "O nadador ", $nome, " compete na categoria ", $categorias[$i];
        }
        //echo 'infantil';
    }
    else if($idade >= 13 && $idade <=17)
    {
        //echo 'adolecente';
        for ($i=0; $i < count($categorias) ; $i++) { 
            if($categorias[$i] == 'adolecente')
                echo "O nadador ", $nome, " compete na categoria ", $categorias[$i];
        }
    }
    else
    {
        //echo 'adulto';
        for ($i=0; $i < count($categorias) ; $i++) { 
            if($categorias[$i] == 'adulto')
                echo "O nadador ", $nome, " compete na categoria ", $categorias[$i];
        }
    }
?>