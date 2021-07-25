<?php
session_start();


$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolecente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if (empty($nome)) {
    $_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio';
    header('location: index.php');
    return;
} else if (strlen($nome) < 3 || strlen($nome) > 41) {
    $_SESSION['mensagem-de-erro'] = 'O nome deve ter entre 4 e 40 characteres';
    header('location: index.php');
    return;
} else if (!is_numeric($idade)) {
    $_SESSION['mensagem-de-erro'] = 'Informe um número para idade';
    header('location: index.php');
    return;
}

//var_dump($nome);
//var_dump($idade);

if ($idade >= 6 && $idade <= 12) {
    for ($i = 0; $i < count($categorias); $i++) {
        if ($categorias[$i] == 'infantil') {
            $_SESSION['mensagem-de-sucesso'] = "O nadador " . $nome . " compete na categoria " . $categorias[$i];
            header('location: index.php');
            return;
        }
    }
    //echo 'infantil';
} else if ($idade >= 13 && $idade <= 17) {
    //echo 'adolecente';
    for ($i = 0; $i < count($categorias); $i++) {
        if ($categorias[$i] == 'adolecente') {
            $_SESSION['mensagem-de-sucesso'] = "O nadador " . $nome . " compete na categoria " . $categorias[$i];
            header('location: index.php');
            return;
        }
    }
} else {
    //echo 'adulto';
    for ($i = 0; $i < count($categorias); $i++) {
        if ($categorias[$i] == 'adulto') {
            $_SESSION['mensagem-de-sucesso'] = "O nadador " . $nome . " compete na categoria " . $categorias[$i];
            header('location: index.php');
            return;
        }
    }
}
return 0;
