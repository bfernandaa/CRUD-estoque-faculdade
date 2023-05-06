<?php
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo "Insira seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Insira sua senha";
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: painel.php");

        } else {
            // echo "Falha ao logar: E-mail e/ou senha incorretos";
            $_SESSION['nao_autenticado'] = true;
        }

    }

}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bom Preço - Login</title>
    <link rel="stylesheet" href="telaLogin.css">
</head>
<body>
    
    <section id="tela-login">
        <div id="logo"><img src="imagens/logo-mercado.PNG" alt=""></div>
        <h1>Gerenciamento de Estoque</h1>
        <?php
            if($_SESSION['nao_autenticado']):
        ?>
        <div class="notification">
            <p>Usuário ou senha inválidos</p>
        </div>
        <?php
            endif;
            unset($_SESSION['nao_autenticado']);
        ?>
        <form method="POST" action="">
            <input class="input-form" type="email" name="email" placeholder="Insira o usuário do colaborador">
            <input class="input-form" type="password" name="senha" placeholder="Insira sua senha">
            <button type="submit">Entrar</button>
        </form>
    </section>
</body>
</html>