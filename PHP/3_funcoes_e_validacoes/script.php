<?php

include "services/servicoMensagemSessao.php";
include "services/servicoValidacao.php";
include "services/servicoCategoriaCompetidor.php";

$nome = $_POST['nome'];
$idade = $_POST['idade'];

getCategoriaCompetidor($nome, $idade);
header('location: index.php');
