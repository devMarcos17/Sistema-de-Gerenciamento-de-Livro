<?php

namespace Marcos\Modelo;

use PDO;

class Entrar
{
    private PDO $conexao;

    public function __construct(PDO $conexao)
    {
        $this->conexao = $conexao;
    }

    public function autenticarUsuario(Usuario $usuario): bool
    {
        $nome = $usuario->nome;
        $senha = $usuario->getSenha();

        $query = "SELECT nome, senha FROM usuarios WHERE nome = ?";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindParam(1, $nome);
        $stmt->execute([$nome]);
        $usuarioBanco = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($usuarioBanco && password_verify($senha, $usuarioBanco["senha"])) {
            return true;
        }
        return false;
    }
}
