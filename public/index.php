<?php

$rota = $_SERVER['REQUEST_URI'];

require_once ('../src/controller/alunoController.php');

$paginas = [
    '/' => 'Inicio',
    '/listar' => 'Listar',
    '/novo' => 'Novo',
];

include '../src/views/menu.phtml';

if (false === isset($paginas[$rota])) {
    include '../src/views/erro404.phtml';
    exit;
}

echo $paginas[$rota]();

