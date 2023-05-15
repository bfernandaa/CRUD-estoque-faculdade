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
        <button id="btSair"><a href="logout.php">Sair</a></button>
        <div id="logoBomPreco"><img src="imagens/logo-mercado2.PNG" alt=""></div>
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
<?php
include('conexao.php');
session_start();

$codproduto = $_POST["codproduto"];
$btn = $_POST["consulta"];
$id = $_SESSION['id'];

$sql = "SELECT codproduto, descricao, marca, quantidade, preco FROM produtos WHERE codproduto=$codproduto";
$result = $mysqli->query($sql) or die("Falha na execução do código SQL: " . $mysqli->error);

//print_r($sql);

echo "<table>";
while($exibe = $result->fetch_assoc()){
   echo "<tr><td>Código do Produto:</td>";
   echo "<td>".$exibe["codproduto"]."</td></tr>";
   echo "<tr><td>Descrição do Produto:</td>";
   echo "<td>".$exibe["descricao"]."</td></tr>";
   echo "<tr><td>Marca:</td>";
   echo "<td>".$exibe["marca"]."</td></tr>";
   echo "<tr><td>Quantidade:</td>";
   echo "<td>".$exibe["quantidade"]."</td></tr>";
   echo "<tr><td>Preço:</td>";
   echo "<td>".$exibe["preco"]."</td></tr>";
}
echo "</table>";

// header("Location: painel.php");

?>

