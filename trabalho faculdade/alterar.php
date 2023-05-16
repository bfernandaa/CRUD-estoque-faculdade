<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Estoque - Bom Preço</title>
    <link rel="stylesheet" href="telaEstoque.css">
</head>
<body>
    <header>
        <div id="logoBomPreco">
           <a href="painel.php"><img src="imagens/logo-mercado2.PNG" alt=""></a> 
        </div>
        <a href="logout.php" id="btSair">Sair</a>
        <h1 id="titulo">Gerenciamento de Estoque</h1>
    </header>
<?php
include('conexao.php');
session_start();

$codproduto = $_POST["codproduto"];
$descricao = $_POST["descricao"];
$marca = $_POST["marca"];
$quantidade = $_POST["quantidade"];
$preco = $_POST["preco"];
$btn = $_POST["alteracao"];
$id = $_SESSION['id'];



$sql = "UPDATE produtos SET descricao = '$descricao', marca = '$marca', quantidade = $quantidade, preco = $preco WHERE codproduto = $codproduto";
// $query = $mysqli->query($sql) or die("Falha na execução do código SQL: " . $mysqli->error);

if($mysqli->query($sql)){
    echo '<div class="sucesso">Produto alterado com sucesso</div>';
} else {
    die("Falha na execução do código SQL: " . $mysqli->error);
}

// header("Location: painel.php");

?>

<img src="imagens/imagemRodape2.png" alt="" id="rodape">