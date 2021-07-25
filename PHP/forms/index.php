<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>

<body>
    <p>FORMULÁRIO PARA INSCRIÇÃO</p>
    <form action="script.php" method="post">
        <?php
            $mensagemDeErro =  isset($_SESSION['mensagem-de-erro']) ? $_SESSION['mensagem-de-erro'] : null;
            if (!is_null($mensagemDeErro))
                echo $mensagemDeErro;

            $mensagemDeSucesso =  isset($_SESSION['mensagem-de-sucesso']) ? $_SESSION['mensagem-de-sucesso'] : null;
            if (!is_null($mensagemDeSucesso))
                echo $mensagemDeSucesso;
        ?>
        <p>Seu nome: <input type="text" name="nome" /> </p>
        <p>Sua idade: <input type="number" name="idade" /> </p>
        <br />
        <input type="submit" value="Enviar dados do competidor" />
    </form>
</body>

</html>