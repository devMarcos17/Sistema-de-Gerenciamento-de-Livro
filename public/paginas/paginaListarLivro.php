<?php

use Marcos\Modelo\Estoque;

require_once __DIR__ . "/../../config/autoload.php";
require_once __DIR__ . "/../../config/conexao.php";

$estoque = new Estoque($conexao);

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (!empty($_POST['buscar'])) {
        $livros = $estoque->buscarLivro($_POST['buscar']);
    } else {
        $livros = $estoque->listarLivros();
    }
} else {
    $livros = $estoque->listarLivros();
}
?>
<style>
body {
    font-family: Arial, sans-serif;
    background: #f5f3ff;
    margin: 0;
}

.container {
    width: 95%;
    max-width: 1200px;
    margin: 40px auto;
}

/* topo */
.topo {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}

/* botão voltar */
.voltar {
    text-decoration: none;
    background: linear-gradient(135deg, #7b2cbf, #9d4edd);
    color: white;
    padding: 10px 18px;
    border-radius: 10px;
    font-weight: bold;
    transition: 0.3s;
}

.voltar:hover {
    transform: translateY(-2px);
    background: linear-gradient(135deg, #6a1bb1, #8b3de0);
}

/* busca */
.buscar-livro {
    display: flex;
    gap: 10px;
}

.buscar-livro input[type="text"] {
    width: 300px;
    padding: 10px;
    border-radius: 10px;
    border: 2px solid #ddd;
}

.buscar-livro input[type="submit"] {
    padding: 10px 18px;
    border: none;
    border-radius: 10px;
    background: #8a2be2;
    color: white;
    cursor: pointer;
}

.buscar-livro input[type="submit"]:hover {
    background: #7325bd;
}

/* tabela */
.table-container {
    width: 100%;
    overflow: hidden;
    border-radius: 15px;
    box-shadow: 0 8px 20px rgba(106, 13, 173, 0.2);
}

table {
    width: 100%;
    border-collapse: collapse;
    background: white;
}

thead {
    background: linear-gradient(135deg, #7b2cbf, #9d4edd);
    color: white;
}

th, td {
    padding: 18px;
    text-align: left;
}

tbody tr:nth-child(even) {
    background-color: #f3e8ff;
}

tbody tr:hover {
    background-color: #e9d5ff;
}
    </style>
</head>

<body>


  <body>

<div class="container">

    <div class="topo">
        <a href="paginaInicial.php" class="voltar">← Voltar</a>

        <form action="" method="post" class="buscar-livro">
            <input type="text" name="buscar" placeholder="Buscar..." required>
            <input type="submit" value="Buscar">
        </form>
    </div>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Gênero</th>
                    <th>Autor</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($livros as $livro): ?>
                    <tr>
                        <td><?= strtoupper($livro["id"]) ?></td>
                        <td><?= strtoupper($livro["nome"]) ?></td>
                        <td><?= strtoupper($livro["genero"]) ?></td>
                        <td><?= strtoupper($livro["autor"]) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>

</body>