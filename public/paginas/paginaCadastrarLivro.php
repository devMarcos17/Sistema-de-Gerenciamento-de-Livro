<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: linear-gradient(135deg, #6a11cb, #8e44ad);
        }

        .login-container {
            width: 380px;
            background: #fff;
            padding: 40px;
            border-radius: 24px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, .15);
        }

        .login-container h1 {
            text-align: center;
            color: #6a11cb;
            margin-bottom: 10px;
        }

        .login-container p {
            text-align: center;
            color: #888;
            margin-bottom: 30px;
        }

        .input-group {
            margin-bottom: 20px;
        }

        .input-group label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: 600;
        }

        .input-group input {
            width: 100%;
            padding: 14px;
            border: none;
            border-radius: 12px;
            background: #f4f4f8;
            font-size: 15px;
            outline: none;
            transition: .3s;
        }

        .input-group input:focus {
            background: #fff;
            box-shadow: 0 0 0 2px #8e44ad;
        }

        button {
            width: 100%;
            padding: 14px;
            border: none;
            border-radius: 12px;
            background: #6a11cb;
            color: white;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: .3s;
        }

        button:hover {
            background: #5710a5;
            transform: translateY(-2px);
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            color: #777;
            font-size: 14px;
        }

        .footer a {
            color: #6a11cb;
            text-decoration: none;
            font-weight: 600;
        }
        .input-group {
    position: relative;
}

.input-group select {
    width: 100%;
    padding: 14px;
    border: 2px solid transparent;
    border-radius: 12px;
    background: #f4f4f8;
    font-size: 15px;
    outline: none;
    cursor: pointer;

    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;

    padding-right: 40px;

    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 24 24'%3E%3Cpath fill='%238e44ad' d='M7 10l5 5 5-5z'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 14px center;
    background-size: 18px;

    transition: .3s;
}

/* quando passa o mouse */
.input-group select:hover {
    border-color: #8e44ad;
}

/* quando clica / seleciona */
.input-group select:focus {
    border-color: #8e44ad;
    background-color: #fff;
    box-shadow: 0 0 0 3px rgba(152, 109, 170, 0.2);
}
    </style>
</head>

<body>

    <div class="login-container">
        <h1>Bem-vindo</h1>
        <p>Cadastrar</p>

        <form action="../controle/processarCadastrarLivro.php" method="post">
            <div class="input-group">
                <label>Nome</label>
                <input type="text" name="nome" placeholder="Nome do livro">
            </div>

            <div class="input-group">
                <label for="generos">Escolha um gênero:</label>

                <select id="generos" name="generos" required>
                    <option value="" disabled selected>Selecione...</option>
                    <option value="Aventura">Aventura</option>
                    <option value="Autoajuda">Autoajuda</option>
                    <option value="Biografia">Biografia</option>
                    <option value="Fantasia">Fantasia</option>
                    <option value="Ficção Científica">Ficção Científica</option>
                    <option value="Romance">Romance</option>
                    <option value="Suspense">Suspense</option>
                </select>
            </div>

             <div class="input-group">
                <label>Autor</label>
                <input type="text" name="autor" placeholder="Digite o nome do autor">
            </div>

            <button type="submit" name="submit">Confirmar</button>
        </form>
    </div>

</body>

</html>