<?php
namespace Marcos\Modelo;

use PDO;

class Cadastrar
{
    private PDO $conexao;

    public function __construct(PDO $conexao)
    {
        $this->conexao = $conexao;
    }

    public function cadastrarUsuario(Usuario $usuario): bool
    {
        $nome = $usuario->nome;
        $senha = password_hash($usuario->getSenha(), PASSWORD_DEFAULT);

        $query = "INSERT INTO usuarios (nome, senha) VALUES (?, ?)";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindParam(1, $nome);
        $stmt->bindParam(2, $senha);

        $sucesso = $stmt->execute();
        if($sucesso){
            return true;
        }
        return false;
        
    }
}
?>