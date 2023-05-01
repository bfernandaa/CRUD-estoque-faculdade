<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bom Preço - Gerenciamento de Estoque</title>
    <link rel="stylesheet" href="telaLogin.css">
</head>
<body>
    
    <section id="tela-login">
        <div id="logo"><img src="imagens/logo-mercado.PNG" alt=""></div>
        <h1>Gerenciamento de Estoque</h1>
        <div class="notification">
            <p>Usuário ou senha inválidos</p>
        </div>
        <form method="post" action="login.php">
            <input class="input-form" type="text" placeholder="Usuário do Colaborador">
            <input class="input-form" type="password" placeholder="Senha">
            <button type="submit">Entrar</button>
        </form>
    </section>
</body>
</html>