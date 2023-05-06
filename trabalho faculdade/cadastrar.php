<?php
include('conexao.php');

// $idproduto = $_POST["idproduto"];
$descricao = $_POST["descricao"];
$quantidade = $_POST["quantidade"];
$valor = $_POST["valor"];
// $btncadastro = $_POST["btncadastro"];


$cadastro = "INSERT INTO produtos (descricao, quantidade, valor) VALUES ('$descricao', '$quantidade', '$valor')";

if (mysqli_query($cadastro)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $cadastro . "<br>" . mysqli_error($cadastro);
}
?>