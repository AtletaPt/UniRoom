<?php
$ficheiroBD = __DIR__ . '/uniroom.sqlite';

try {
    $bd = new PDO('sqlite:' . $ficheiroBD);
    $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $bd->exec('PRAGMA foreign_keys = ON');

    $bd->exec(file_get_contents(__DIR__ . '/esquema.sql'));

    $mensagem = "Base de dados do UniRoom criada com sucesso!";
} catch (PDOException $erro) {
    http_response_code(500);
    $mensagem = 'Erro ao criar a base de dados: ' . $erro->getMessage();
}

echo '<!DOCTYPE html><meta charset="utf-8"><title>Criar BD UniRoom</title>';
echo '<p>' . htmlspecialchars($mensagem) . '</p>';