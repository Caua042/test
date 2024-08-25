<?php
include("conexao.php");


$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$genero = $_POST['genero'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$data_nascimento = $_POST['data_nascimento'];


$verificaEmail = "SELECT email FROM usuarios WHERE email='$email'";
$resultado = mysqli_query($conexao, $verificaEmail);

if (mysqli_num_rows($resultado) > 0) {
    echo "O email já está cadastrado. Tente outro.";
} else {
    
    $sql = "INSERT INTO usuarios (nome, email, senha, genero, cidade, estado, data_nascimento) 
            VALUES ('$nome', '$email', '$senha', '$genero', '$cidade', '$estado', '$data_nascimento')";

    
    if (mysqli_query($conexao, $sql)) {
        echo "Usuário cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar: " . mysqli_error($conexao);
    }
}


mysqli_close($conexao);
?>
