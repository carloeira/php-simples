<?php

function abriConection(): PDO {
    $servidor = 'localhost';
    $usuario = 'root';
    $senha = '1234';
    $banco = 'db_sistema';
    
    $conexao = new PDO("mysql:host={$servidor};dbname={$banco}", $usuario, $senha);
    
    return $conexao;
}
