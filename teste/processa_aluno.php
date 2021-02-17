<?php

//Inclui as configurações do banco de dados 
include 'db.php';

//Variaveis que recebem os dados do formulario via post
$nome_aluno = $_POST['nome_aluno'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$data_nascimento = $_POST['data_nascimento'];
$genero = $_POST['genero'];

//Inseri os dados do aluno no banco de dados
$query = "INSERT INTO ALUNOS(nome, telefone, email, data_nascimento, genero) VALUES ('$nome_aluno','$telefone', '$email', '$data_nascimento', '$genero')";

//Executa o comando sql no banco de dados
mysqli_query($conexao,$query);

//Retorna para pagina de exibição dos alunos
header('location:index.php?pagina=alunos');


