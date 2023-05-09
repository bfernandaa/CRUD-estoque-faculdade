<?php
include('conexao.php');

// $idproduto = $_POST["idproduto"];
$descricao = $_POST["descricao"];
$quantidade = $_POST["quantidade"];
$valor = $_POST["valor"];
$btn = $_POST["cadastro"];


$cadastro = "INSERT INTO produtos (descricao, quantidade, valor) VALUES ('$descricao', '$quantidade', '$valor')";


?>