<?php 

declare(strict_types=1);


function inicio(): void {
    include '../src/views/inicio.phtml';
}

function novo(): void {
    include '../src/views/novo.phtml';
    if (false === empty($_POST)) {
        $nome = trim($_POST['nome']);
        $cidade = trim($_POST['cidade']);
        $matricula = trim($_POST['matricula']);

        if (true === validateForm($nome, $cidade, $matricula)) {
            novoAluno($nome, $cidade, $matricula);
            header('location:/listar');
        }
    }
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

function editar(): void {
    $id = $_GET['id'];
    $aluno = buscarUmAlunos($id);
    atualizarAluno();
    include '../src/views/editar.phtml';
}
