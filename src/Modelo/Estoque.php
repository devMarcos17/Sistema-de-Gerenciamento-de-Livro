<?php

namespace Marcos\Modelo;

use PDO;

class Estoque
{
    private PDO $conexao;

    public function __construct(
        PDO $conexao
    ) {
        $this->conexao = $conexao;
    }
    public function cadastrarLivro(Livro $livro): bool
    {
        $nome = $livro->nome;
        $genero = $livro->getGenero();
        $autor = $livro->getAutor();

        $query = "INSERT INTO livros (nome, genero, autor) VALUES (?, ?, ?)";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindParam(1, $nome);
        $stmt->bindParam(2, $genero);
        $stmt->bindParam(3, $autor);
        $sucesso = $stmt->execute();

        if ($sucesso) {
            return true;
        }
        return false;
    }
    public function listarLivros(): array
    {
        $query = "SELECT id, nome, genero, autor FROM livros";
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
        $suceso = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $suceso;
    }
    public function atualizarLivro(Livro $livro): bool
    {
        $nome = $livro->nome;
        $genero = $livro->getGenero();
        $autor = $livro->getAutor();
        $id = $livro->id;

        $query = "UPDATE livros SET nome = ?, genero = ?, autor = ? WHERE id = ?";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindParam(1, $nome);
        $stmt->bindParam(2, $genero);
        $stmt->bindParam(3, $autor);
        $stmt->bindParam(4, $id);

        $stmt->execute();
        if ($stmt->rowCount() === 0) {
            return false;
        }
        return true;
    }
    public function excluirLivro(Livro $livro): bool
    {
        $id = $livro->id;
        $query = "DELETE FROM livros WHERE id = ?";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();

        if ($stmt->rowCount() === 0) {
            return false;
        }
        return true;
    }
    public function buscarLivro(string $nome)
    {
        $nome = "%" . $nome . "%";

        $query = "SELECT id, nome, genero, autor 
              FROM livros 
              WHERE nome LIKE ? 
                 OR genero LIKE ? 
                 OR autor LIKE ? 
                 OR id LIKE ?";

        $stmt = $this->conexao->prepare($query);
        $stmt->bindParam(1, $nome);
        $stmt->bindParam(2, $nome);
        $stmt->bindParam(3, $nome);
        $stmt->bindParam(4, $nome);
        $suceso = $stmt->execute();
        $livros = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $livros;
    }
}
