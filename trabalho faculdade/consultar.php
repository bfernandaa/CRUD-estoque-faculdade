<?php
include('conexao.php');
session_start();

$codproduto = $_POST["codproduto"];
$descricao = $_POST["descricao"];
$marca = $_POST["marca"];
$quantidade = $_POST["quantidade"];
$valor = $_POST["valor"];
$btn = $_POST["consulta"];
$id = $_SESSION['id'];



$sql = "SELECT codproduto, descricao, marca, quantidade, valor FROM produtos WHERE codproduto=$codproduto";
$query = $mysqli->query($sql) or die("Falha na execução do código SQL: " . $mysqli->error);

header("Location: painel.php");

?>