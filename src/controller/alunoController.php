<?php 

declare(strict_types=1);


function inicio(): void {
    include '../src/views/inicio.phtml';
}

function excluir(): void {
    $id = $_GET['id'];
    excluirAluno($id);
    header('location: /listar');
}

function listar(): void {
    $alunos = buscarAlunos();
    include '../src/views/listar.phtml';
}

function novo(): void {
    include '../src/views/novo.phtml';
    novoAluno();
}

function editar(): void {
    $id = $_GET['id'];
    $aluno = buscarUmAlunos($id);
    atualizarAluno();
    include '../src/views/editar.phtml';
}
