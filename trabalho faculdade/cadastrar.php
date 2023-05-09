<?php
include('conexao.php');
session_start();

// $idproduto = $_POST["idproduto"];
$descricao = $_POST["descricao"];
$quantidade = $_POST["quantidade"];
$valor = $_POST["valor"];
$btn = $_POST["cadastro"];
$id = $_SESSION['id'];

// echo "<pre>";print_r($_POST);echo "</pre>";


$sql = "INSERT INTO produtos (descricao, quantidade, valor, usuario_modificador) VALUES ('$descricao', '$quantidade', '$valor', '$id')";

echo $sql;

// $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
$sql_query = $mysqli->query($sql) or die("Falha na execução do código SQL: " . $mysqli->error);
?>