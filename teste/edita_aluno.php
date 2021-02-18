<?php

//Inclui as configurações do banco de dados 
include 'db.php';

//Variaveis que recebem os dados do formulario via post
$id_aluno = $_POST['id_aluno'];
$nome_aluno = $_POST['nome_aluno'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$data_nascimento = $_POST['data_nascimento'];
$genero = $_POST['genero'];

//Atualiza os dados do aluno no banco de dados
$query = "UPDATE ALUNOS SET nome='$nome_aluno', telefone='$telefone',email='$email',data_nascimento='$data_nascimento', genero = '$genero' WHERE id_aluno=$id_aluno";

//Executa o comando sql no banco de dados
mysqli_query($conexao,$query);

//Retorna para pagina de exibição dos alunos
header('location:index.php?pagina=alunos'); 