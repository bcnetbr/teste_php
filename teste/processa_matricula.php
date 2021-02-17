<?php

include 'db.php';

$id_turma = $_POST['escolha_turma'];
$id_aluno = $_POST['escolha_aluno'];

$query = "INSERT INTO ALUNOS_DE_TURMAS(id_turma, id_aluno) VALUES ($id_turma, $id_aluno)";

mysqli_query($conexao,$query);

header('location:index.php?pagina=matriculas');
