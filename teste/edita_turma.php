<?php

//Inclui as configurações do banco de dados 
include 'db.php';

//Variaveis que recebem os dados do formulario via post
$id_turma = $_POST['id_turma'];
$ano = $_POST['ano'];
$nivel = $_POST['nivel_ensino'];
$serie = $_POST['serie'];
$turno = $_POST['turno'];
$id_escola = $_POST['id_escola'];

//Atualiza os dados da turma no banco de dados
$query = "UPDATE TURMAS SET ano='$ano', nivel_ensino='$nivel', serie='$serie', turno='$turno', id_escola = $id_escola WHERE id_turma=$id_turma";

//Executa o comando sql no banco de dados
mysqli_query($conexao,$query);

//Retorna para pagina de exibição dos alunos
header('location:index.php?pagina=turmas'); 