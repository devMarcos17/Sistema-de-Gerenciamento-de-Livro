<?php
namespace Marcos\Modelo;

class Livro
{
    public ?int $id;
    public function __construct(
        public string $nome, private string $genero, private string $autor, ?int $id = null
    )
    {
         $this->id = $id;
        
    }
    public function getGenero(): string
    {
        return $this->genero;
    }
    public function getAutor(): string
    {
        return $this->autor;
    }
}
?>