<?php

declare(strict_types=1);

$pdo = null;

try {
    $pdo = new PDO('mysql:host=localhost:3306;dbname=exemplo', 'root', '');
} catch (Exception $e) {
    echo $e->getMessage();
    die();
}
return $pdo;
//var_dump($pdo);

//http://localhost/php-oo/src/connect.php