<?php
include('conexao.php');
session_start();

$codproduto = $_POST["codproduto"];
$btn = $_POST["consulta"];
$id = $_SESSION['id'];

$sql = "SELECT descricao, marca, quantidade, preco FROM produtos WHERE codproduto=$codproduto";
$query = $mysqli->query($sql) or die("Falha na execução do código SQL: " . $mysqli->error);

print_r($sql);

if ($result = $mysqli -> query($sql)) {
    while ($row = $result -> fetch_row()) {
      printf ("%s (%s)\n", $row["codproduto"], $row["descricao"], $row["marca"], $row["quantidade"], $row["preco"]);
    }
    $result -> free_result();
  }

// header("Location: painel.php");

?>