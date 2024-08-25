<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "novo_banco"; 

$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);

if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}
?>
