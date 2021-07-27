<?php

declare(strict_types=1);


class Produto
{
    private PDO $conexao;

    public function __construct()
    {
        try {
            $this->conexao = new PDO('mysql:host=localhost:3306;dbname=exemplo', 'root', '');
        } catch (Exception $e) {
            echo $e->getMessage();
            die();
        }
    }

    //http://localhost/php-oo/src/list.php
    public function list(): array
    {
        $sql = 'select * from produtos';

        $produtos = [];

        foreach ($this->conexao->query($sql) as $key => $value) {
            array_push($produtos, $value);
            //echo "Id: " . $value['id'] . "</br> Descrição: " . $value['descricao'] . "<hr>";
        }
        return $produtos;
    }

    //http://localhost/php-oo/src/insert.php?descricao=Produto
    public function insert(string $descricao): int
    {
        $sql = 'INSERT INTO produtos(descricao) VALUES(?)';

        $prepare = $this->conexao->prepare($sql);

        $prepare->bindParam(1, $descricao);
        $prepare->execute();

        return $prepare->rowCount();
    }

    //http://localhost/php-oo/src/update.php?descricao=Produto alterado&id=1
    public function update(int $id, string $descricao): int
    {
        $sql = 'UPDATE produtos SET descricao = ? WHERE id = ?';

        $prepare = $this->conexao->prepare($sql);

        $prepare->bindParam(1, $descricao);
        $prepare->bindParam(2, $id);
        $prepare->execute();

        return $prepare->rowCount();
    }

    //http://localhost/php-oo/src/delete.php?id=1
    public function delete(int $id): int
    {
        $sql = 'DELETE FROM produtos WHERE id = ?';

        $prepare = $this->conexao->prepare($sql);

        $prepare->bindParam(1, $id);
        $prepare->execute();

        return $prepare->rowCount();
    }
}
