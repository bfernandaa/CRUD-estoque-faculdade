<?php
include('conexao.php');
session_start();

$codproduto = $_POST["codproduto"];
$descricao = $_POST["descricao"];
$marca = $_POST["marca"];
$quantidade = $_POST["quantidade"];
$preco = $_POST["preco"];
$btn = $_POST["cadastro"];
$id = $_SESSION['id'];



$sql = "INSERT INTO produtos (codproduto, descricao, marca, quantidade, preco, usuario_modificador) VALUES ('$codproduto', '$descricao', '$marca', '$quantidade', '$preco', '$id')";
$query = $mysqli->query($sql) or die("Falha na execução do código SQL: " . $mysqli->error);

header("Location: painel.php");

?>