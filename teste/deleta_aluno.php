<?php
include 'db.php';
$id_aluno = $_GET['id_aluno'];


$query = "DELETE FROM ALUNOS_DE_TURMAS WHERE ID_ALUNO  = $id_aluno";

$query2 = "DELETE FROM ALUNOS WHERE ID_ALUNO  = $id_aluno";

mysqli_query($conexao, $query);

mysqli_query($conexao, $query2);

header('location:index.php?pagina=alunos');
