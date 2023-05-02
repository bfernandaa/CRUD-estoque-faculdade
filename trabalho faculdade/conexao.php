<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', '');
define('DATABASE', 'login');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DATABASE);

if (!$conexao) {
    die("Connection failed: " . mysqli_connect_error());
}

?>