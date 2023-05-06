<?php
include('conexao.php');

$idproduto = $_POST["idproduto"];
$descricao = $_POST["descricao"];
$quantidade = $_POST["quantidade"];
$valor = $_POST["valor"];
// $btncadastro = $_POST["btncadastro"];


$cadastro = "INSERT INTO produtos (idproduto, descricao, quantidade, valor) VALUES ('$idproduto', '$descricao', '$quantidade', '$valor')";

?>