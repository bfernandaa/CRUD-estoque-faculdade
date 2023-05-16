<?php
include('valida_login.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bom Preço - Controle de Estoque</title>
    <link rel="stylesheet" href="telaEstoque.css" type="text/css">
</head>
<body>
    <header>
        <a href="logout.php" id="btSair">Sair</a>
        <div id="logoBomPreco">
            <a href="painel.php"><img src="imagens/logo-mercado2.PNG" alt=""></a>
        </div>
        <h1 id="titulo">Gerenciamento de Estoque</h1>
        <h3 id="welcome">Bem-vindo(a), <?php echo $_SESSION['nome']; ?></h3>
    </header>
    <section id="areaProdutos">
        <button id="actionProdutoCadastrar" class="btn" >Cadastrar Produto</button>
        <button id="actionProdutoConsultar" class="btn" >Consultar Produto</button>
        <button id="actionProdutoEditar" class="btn" >Editar Produto</button>
        <button id="actionProdutoExcluir" class="btn" >Excluir Produto</button>
    </section>
   
    <section id="areaForm">
        
        <!--<div>
            <h1>Cadastrar Produto</h1>
            <label for="IdProduto">Id do Produto:</label>
                <input class="inputProduto" id="IdProduto" type="text">
            <label for="Categoria">Categoria:</label>
                <input class="inputProduto" id="Categoria" type="text">
            <label for="Descrição">Qtde:</label>
                <input class="inputProduto" id="Qtde" type="text">
            <label for="Descricao">Descrição:</label>
                <input class="inputProduto" id="Descricao" type="text">
        </div>
        -->
        
    </section>
    
    <img src="imagens/imagemRodape2.png" alt="" id="rodape">
    
    <script src="script.js"></script>
</body>
</html>