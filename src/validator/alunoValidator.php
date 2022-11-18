<?php

declare(strict_types=1);

function validateForm(string $nome, string $matricula, string $cidade): bool {
    if (strlen($nome) < 3) {
        $mensagem = 'Nome inválido';
        include '../src/views/components/erro.phtml';
        return false;
    } if (strlen($cidade) < 3) {
        $mensagem = 'Cidade inválido';
        include '../src/views/components/erro.phtml';
        return false;
    } if (strlen($matricula) < 6) {
        $mensagem = 'Matricula inválido';
        include '../src/views/components/erro.phtml';
        return false;
    }
    return true;
}
