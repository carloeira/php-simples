<?php

$rota = explode('?', $_SERVER['REQUEST_URI']);
$rota = $rota[0];

require_once ('../src/views/header.phtml');
require_once ('../src/controller/alunoController.php');
require_once ('../src/connection/connection.php');
require_once ('../src/repository/alunoRepository.php');
require_once ('../src/validator/alunoValidator.php');
require_once ('../src/views/footer.phtml');

$paginas = [
    '/' => 'inicio',
    '/listar' => 'listar',
    '/novo' => 'novo',
    '/editar' => 'editar',
    '/excluir' => 'excluir',
];

include '../src/views/menu.phtml';

if (false === isset($paginas[$rota])) {
    $mensagem = 'Endereço inválido';
    include '../src/views/components/erro.phtml';
    exit;
}

echo $paginas[$rota]();
