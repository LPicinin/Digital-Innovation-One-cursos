<?php

require 'Produto.php';

$produto = new Produto();


switch ($_GET['operacao']) {
    case 'list':
        echo "<h3>Produtos</h3>";

        foreach ($produto->list() as $value) {
            echo "Id: " . $value['id'] . "</br> Descrição: " . $value['descricao'] . "<hr>";
        }
        break;
    case 'insert':
        $status = $produto->insert('Produto switch');
        if (!$status)
            echo "Não foi possível executar a inserção";
        else
            echo "Registro inserido com sucesso";
        break;
    case 'update':
        $status = $produto->update(4, 'Produto Alteração test luis');
        if (!$status)
            echo "Não foi possível executar a alteração";
        else
            echo "Registro alterado com sucesso";
        break;
    case 'delete':
        $status = $produto->delete(4);
        if (!$status)
            echo "Não foi possível executar a exclusão";
        else
            echo "Registro excluído com sucesso";
        break;

    default:
        echo "opção inválida";
        break;
}
