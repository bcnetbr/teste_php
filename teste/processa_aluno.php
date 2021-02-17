<?php

include 'db.php';

$nome_aluno = $_POST['nome_aluno'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$data_nascimento = $_POST['data_nascimento'];
$genero = $_POST['genero'];

echo $nome_aluno;
echo $telefone;
echo $email;
echo $data_nascimento;
echo $genero;



$query = "INSERT INTO ALUNOS(nome, telefone, email, data_nascimento, genero) VALUES ('$nome_aluno','$telefone', '$email', '$data_nascimento', '$genero')";

mysqli_query($conexao,$query);

header('location:index.php?pagina=alunos');


