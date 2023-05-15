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
        <button id="btSair"><a href="logout.php">Sair</a></button>
        <h1 id="titulo">Gerenciamento de Estoque</h1>
    </header>
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
   echo "<tr><th>Código do Produto:</th>";
   echo "<td>".$exibe["codproduto"]."</td></tr>";
   echo "<tr><th>Descrição do Produto:</th>";
   echo "<td>".$exibe["descricao"]."</td></tr>";
   echo "<tr><th>Marca:</th>";
   echo "<td>".$exibe["marca"]."</td></tr>";
   echo "<tr><th>Quantidade:</th>";
   echo "<td>".$exibe["quantidade"]."</td></tr>";
   echo "<tr><th>Preço:</th>";
   echo "<td>".$exibe["preco"]."</td></tr>";
}
echo "</table>";

// header("Location: painel.php");

?>