<?php
$ficheiroBD = __DIR__ . '/uniroom.sqlite';

if (!file_exists($ficheiroBD)) {
    http_response_code(500);
    die('Erro ao encontrar a base de dados: ' . $ficheiroBD);
}

$bd= new PDO('sqlite:' . $ficheiroBD);
$bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

/*try {
    $bd = new PDO('sqlite:' . $ficheiroBD);
    $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $bd->exec('PRAGMA foreign_keys = ON');
} catch (PDOException $erro) {
    http_response_code(500);
    die('Erro ao ligar à base de dados: ' . $erro->getMessage());
}*/