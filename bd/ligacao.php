<?php
$ficheiroBD = __DIR__ . '/uniroom.sqlite';

try {
    $bd = new PDO('sqlite:' . $ficheiroBD);
    $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $bd->exec('PRAGMA foreign_keys = ON');
} catch (PDOException $erro) {
    http_response_code(500);
    die('Erro ao ligar à base de dados: ' . $erro->getMessage());
}