<?php

$rota = explode('?', $_SERVER['REQUEST_URI']);
$rota = $rota[0];

require_once ('../src/controller/alunoController.php');
require_once ('../src/connection/connection.php');
require_once ('../src/repository/alunoRepository.php');
require_once ('../src/validator/alunoValidator.php');

$paginas = [
    '/' => 'inicio',
    '/listar' => 'listar',
    '/novo' => 'novo',
    '/editar' => 'editar',
    '/excluir' => 'excluir',
];

include '../src/views/menu.phtml';

if (false === isset($paginas[$rota])) {
    include '../src/views/erro404.phtml';
    exit;
}

echo $paginas[$rota]();
