<?php

declare(strict_types=1);

function novoAluno(string $nome, string $matricula, string $cidade): void {
    $sql = 'INSERT INTO tb_alunos (nome, matricula, cidade) VALUES (?,?,?)';
    $query = abriConection()->prepare($sql);
    $query->execute([$nome, $matricula, $cidade]);
}

function buscarAlunos(): iterable {
    $sql = 'SELECT * FROM tb_alunos';
    $alunos = abriConection()->query($sql);
    return $alunos;
}

function buscarUmAlunos($id): iterable {
    $sql = "SELECT * FROM tb_alunos WHERE id='{$id}'";
    $aluno = abriConection()->query($sql);
    return $aluno->fetch(PDO::FETCH_ASSOC);
}

function excluirAluno(string $id): void {
    $sql = "DELETE FROM tb_alunos WHERE id='{$id}'";
    abriConection()->query($sql);
}

function atualizarAluno($nome, $matricula, $cidade, $id): void {
    $sql = 'UPDATE tb_alunos SET nome=?, matricula=?, cidade=? WHERE id=?';
    $query = abriConection()->prepare($sql);
    $query->execute([$nome, $matricula, $cidade, $id]);
    
}
