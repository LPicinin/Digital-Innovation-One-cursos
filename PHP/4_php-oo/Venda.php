<?php

declare(strict_types=1);
class Venda
{
    private $data;
    private $produto;
    private $quantidade;
    private $valorTotal;



    public function __construct(
        $data,
        $produto,
        $quantidade,
        $valorTotal
    ) {
        $this->data;
        $this->produto;
        $this->quantidade;
        $this->valorTotal;
    }

    public function getData()
    {
        return $this->data;
    }
    public function getProduto()
    {
        return $this->produto;
    }
    public function getQuantidade()
    {
        return $this->quantidade;
    }
    public function getValorTotal()
    {
        return $this->valorTotal;
    }

    public function setData($data)
    {
        $this->data = $data;
    }
    public function setProduto($produto)
    {
        $this->produto = $produto;
    }
    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;
    }
    public function setValorTotal($valorTotal)
    {
        $this->valorTotal = $valorTotal;
    }
}
