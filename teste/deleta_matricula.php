<?php
include 'db.php';
$id_aluno_de_turma = $_GET['id_aluno_de_turma'];

$query = "DELETE FROM ALUNOS_DE_TURMAS WHERE ID_ALUNO_DE_TURMA  = $id_aluno_de_turma";

mysqli_query($conexao, $query);

header('location:index.php?pagina=matriculas');
