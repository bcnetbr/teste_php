<?php
include 'db.php';
$id_turma = $_GET['id_turma'];

//$query = "DELETE FROM ALUNOS_CURSOS WHERE ID_CURSO  = $id_curso";

$query2 = "DELETE FROM TURMAS WHERE ID_TURMA  = $id_turma";

//mysqli_query($conexao, $query);

mysqli_query($conexao, $query2);

header('location:index.php?pagina=turmas');

