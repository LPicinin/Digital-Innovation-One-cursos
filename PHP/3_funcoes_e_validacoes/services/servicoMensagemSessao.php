<?php

session_start();

function setMensagemDeErro(string $mensagem): void
{
    $_SESSION['mensagem-de-erro'] = $mensagem;
}

function getMensagemDeErro(): ?string
{
    if (isset($_SESSION['mensagem-de-erro']))
        return $_SESSION['mensagem-de-erro'];
    return null;
}

function existisMensagemDeErro(): bool
{
    return isset($_SESSION['mensagem-de-erro']);
}
function clearMensagemDeErro(): void
{
    if (isset($_SESSION['mensagem-de-erro']))
        unset($_SESSION['mensagem-de-erro']);
}


function setMensagemDeSucesso(string $mensagem): void
{
    $_SESSION['mensagem-de-sucesso'] = $mensagem;
}

function getMensagemDeSucesso(): ?string
{
    if (isset($_SESSION['mensagem-de-sucesso']))
        return $_SESSION['mensagem-de-sucesso'];
    return null;
}

function existisMensagemDeSucesso(): bool
{
    return isset($_SESSION['mensagem-de-sucesso']);
}
function clearMensagemDeSucesso(): void
{
    if (isset($_SESSION['mensagem-de-sucesso']))
        unset($_SESSION['mensagem-de-sucesso']);
}
