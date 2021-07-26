<?php

function getCategoriaCompetidor(string $nome, string $idade): ?string
{
    if (validaNome($nome) && validaIdade($idade)) {
        clearMensagemDeErro();
        $categoria = defineCategoriaCompetidorOf($idade);
        setMensagemDeSucesso("O nadador " . $nome . " compete na categoria " . $categoria);
        return null;
    } else {
        clearMensagemDeSucesso();
        return getMensagemDeErro();
    }
}

function defineCategoriaCompetidorOf(string $idade)
{
    $categorias = [];
    $categorias[] = 'infantil';
    $categorias[] = 'adolecente';
    $categorias[] = 'adulto';
    $categorias[] = 'idoso';
    if ($idade >= 6 && $idade <= 12) {
        for ($i = 0; $i < count($categorias); $i++)
            if ($categorias[$i] == 'infantil')
                return $categorias[$i];
    } else if ($idade >= 13 && $idade <= 17) {
        for ($i = 0; $i < count($categorias); $i++)
            if ($categorias[$i] == 'adolecente')
                return $categorias[$i];
    } else {
        for ($i = 0; $i < count($categorias); $i++)
            if ($categorias[$i] == 'adulto')
                return $categorias[$i];
    }
}
