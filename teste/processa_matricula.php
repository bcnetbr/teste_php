<?php

//Inclui as configurações do banco de dados 
include 'db.php';

//Variaveis que recebem os dados do formulario via post
$id_turma = $_POST['escolha_turma'];
$id_aluno = $_POST['escolha_aluno'];

//Inseri os dados da matricula do aluno na turma no banco de dados
$query = "INSERT INTO ALUNOS_DE_TURMAS(id_turma, id_aluno) VALUES ($id_turma, $id_aluno)";

//Executa o comando sql no banco de dados
mysqli_query($conexao,$query);

//Retorna para pagina de exibição das matriculas realizadas
header('location:index.php?pagina=matriculas');
