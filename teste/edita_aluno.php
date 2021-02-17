<?php

include 'db.php';

$id_aluno = $_POST['id_aluno'];
$nome_aluno = $_POST['nome_aluno'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$data_nascimento = $_POST['data_nascimento'];
$genero = $_POST['genero'];

$query = "UPDATE ALUNOS SET nome='$nome_aluno', telefone='$telefone',email='$email',data_nascimento='$data_nascimento', genero = '$genero' WHERE id_aluno=$id_aluno";

mysqli_query($conexao,$query);

header('location:index.php?pagina=alunos'); 