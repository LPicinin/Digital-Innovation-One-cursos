<?php

function validaNome(string $nome): bool
{
    if (empty($nome)) {
        setMensagemDeErro('O nome não pode ser vazio');
        return false;
    } else if (strlen($nome) < 3 || strlen($nome) > 41) {
        setMensagemDeErro('O nome deve ter entre 4 e 40 characteres');
        return false;
    }
    return true;
}
function validaIdade(string $idade): bool
{
    if (!is_numeric($idade)) {
        setMensagemDeErro('Informe um número para idade');
        return false;
    }
    return true;
}

//header('location: index.php');