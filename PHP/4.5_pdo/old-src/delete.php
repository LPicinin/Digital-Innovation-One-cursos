<?php

declare(strict_types=1);

$pdo = require 'connect.php';
$sql = 'DELETE FROM produtos WHERE id = ?';

$prepare = $pdo->prepare($sql);

$prepare->bindParam(1, $_GET['id']);
$prepare->execute();

echo $prepare->rowCount();

//http://localhost/php-oo/src/delete.php?id=1