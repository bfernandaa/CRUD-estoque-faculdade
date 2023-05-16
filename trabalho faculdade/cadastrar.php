<?php
session_start();
?>

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
        <h3 id="welcome">Bem-vindo(a), <?php echo $_SESSION['nome']; ?></h3>
    </header>
    <section id="areaProdutos">
        <button id="actionProdutoCadastrar" class="btn" >Cadastrar Produto</button>
        <button id="actionProdutoConsultar" class="btn" >Consultar Produto</button>
        <button id="actionProdutoEditar" class="btn" >Editar Produto</button>
        <button id="actionProdutoExcluir" class="btn" >Excluir Produto</button>
    </section>
<?php
include('conexao.php');

$codproduto = $_POST["codproduto"];
$descricao = $_POST["descricao"];
$marca = $_POST["marca"];
$quantidade = $_POST["quantidade"];
$preco = $_POST["preco"];
$btn = $_POST["cadastro"];
$id = $_SESSION['id'];



$sql = "INSERT INTO produtos (codproduto, descricao, marca, quantidade, preco, usuario_modificador) VALUES ('$codproduto', '$descricao', '$marca', '$quantidade', '$preco', '$id')";
// $query = $mysqli->query($sql) or die("Falha na execução do código SQL: " . $mysqli->error);

if($mysqli->query($sql)){
    echo '<div class="sucesso">Produto cadastrado com sucesso</div>';
} else {
    die("Falha na execução do código SQL: " . $mysqli->error);
}
// header("Location: painel.php");

?>

<img src="imagens/imagemRodape2.png" alt="" id="rodape">