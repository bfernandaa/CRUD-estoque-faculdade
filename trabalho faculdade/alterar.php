<?php
include('conexao.php');
session_start();

$codproduto = $_POST["codproduto"];
$descricao = $_POST["descricao"];
$marca = $_POST["marca"];
$quantidade = $_POST["quantidade"];
$valor = $_POST["valor"];
$btn = $_POST["alteracao"];
$id = $_SESSION['id'];



$sql = "UPDATE produtos SET descricao={'$descricao'}, marca={'$marca'}, quantidade={'$quantidade'}, valor={'$valor'} WHERE codproduto={'$codproduto'}";
$query = $mysqli->query($sql) or die("Falha na execução do código SQL: " . $mysqli->error);

header("Location: painel.php");

?>