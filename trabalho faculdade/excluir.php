<?php
include('conexao.php');
session_start();

$codproduto = $_POST["codproduto"];
$btn = $_POST["exclusao"];
$id = $_SESSION['id'];


$sql = "DELETE FROM produtos WHERE codproduto=$codproduto";
$query = $mysqli->query($sql) or die("Falha na execução do código SQL: " . $mysqli->error);

header("Location: painel.php");

?>