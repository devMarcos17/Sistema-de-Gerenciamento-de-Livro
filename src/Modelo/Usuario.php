<?php
namespace Marcos\Modelo;

class Usuario
{
    public ?int $id;
    public function __construct(
        public readonly string $nome, private string $senha,  ?int $id = null
    )
    {
        
    }
    public function getSenha(): string
    {
        return $this->senha;
    }

}
?>