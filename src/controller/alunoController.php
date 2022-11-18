<?php 

declare(strict_types=1);


function renderizar(string $nomeDoArquivo, mixed $dados = null) {
    include '../src/views/header.phtml';
    include '../src/views/{nomeDoArquivo}.phtml';
    include '../scr/view/footer.phtml';
}

function inicio(): void {
    include '../src/views/inicio.phtml';
}

function novo(): void {
    include '../src/views/novo.phtml';
    if (false === empty($_POST)) {
        $nome = trim($_POST['nome']);
        $matricula = trim($_POST['matricula']);
        $cidade = trim($_POST['cidade']);

        if (true === validateForm($nome, $matricula, $cidade)) {
            novoAluno($nome, $matricula, $cidade);
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
    $dados = buscarAlunos();
    include '../src/views/listar.phtml';
}

function editar(): void {
    $id = $_GET['id'];
    $dados = buscarUmAlunos($id);

    include '../src/views/editar.phtml';
    if (false === empty($_POST)) {
        $nome = trim($_POST['nome']);
        $matricula = trim($_POST['matricula']);
        $cidade = trim($_POST['cidade']);

        if (true === validateForm($nome, $matricula, $cidade)) {
            atualizarAluno($nome, $matricula, $cidade, $id);
            header('location:/listar');
        }
    }
}
