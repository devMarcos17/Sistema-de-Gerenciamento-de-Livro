<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cadastrar</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI', sans-serif;
}

body{
    display:flex;
    justify-content:center;
    align-items:center;
    min-height:100vh;
    background:linear-gradient(135deg,#6a11cb,#8e44ad);
}

.login-container{
    width:380px;
    background:#fff;
    padding:40px;
    border-radius:24px;
    box-shadow:0 20px 40px rgba(0,0,0,.15);
}

.login-container h1{
    text-align:center;
    color:#6a11cb;
    margin-bottom:10px;
}

.login-container p{
    text-align:center;
    color:#888;
    margin-bottom:30px;
}

.input-group{
    margin-bottom:20px;
}

.input-group label{
    display:block;
    margin-bottom:8px;
    color:#555;
    font-weight:600;
}

.input-group input{
    width:100%;
    padding:14px;
    border:none;
    border-radius:12px;
    background:#f4f4f8;
    font-size:15px;
    outline:none;
    transition:.3s;
}

.input-group input:focus{
    background:#fff;
    box-shadow:0 0 0 2px #8e44ad;
}

button{
    width:100%;
    padding:14px;
    border:none;
    border-radius:12px;
    background:#6a11cb;
    color:white;
    font-size:16px;
    font-weight:600;
    cursor:pointer;
    transition:.3s;
}

button:hover{
    background:#5710a5;
    transform:translateY(-2px);
}

.footer{
    text-align:center;
    margin-top:20px;
    color:#777;
    font-size:14px;
}

.footer a{
    color:#6a11cb;
    text-decoration:none;
    font-weight:600;
}
</style>
</head>
<body>

<div class="login-container">
    <h1>Bem-vindo</h1>
    <p>Cadastrar</p>

   <form action="../controle/processarCadastro.php" method="post">
        <div class="input-group">
            <label>Nome</label>
            <input type="text" name="nome" placeholder="Digite seu nome">
        </div>

        <div class="input-group">
            <label>Senha</label>
            <input type="password" name="senha" placeholder="Digite sua senha">
        </div>

        <button type="submit" name="submit">Entrar</button>
    </form>

    <div class="footer">
        Já possui conta?
        <a href="paginaEntrar.php">Entrar</a>
    </div>
</div>

</body>
</html>