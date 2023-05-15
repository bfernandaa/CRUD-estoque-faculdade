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
$query = $mysqli->query($sql) or die("Falha na execução do código SQL: " . $mysqli->error);

header("Location: painel.php");

?>