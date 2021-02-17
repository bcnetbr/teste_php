<?php
include 'db.php';
$id_escola = $_GET['id_escola'];


//$query = "DELETE FROM ALUNOS_DE_TURMAS WHERE ID_ALUNO  = $id_aluno";

$query2 = "DELETE FROM ESCOLAS WHERE ID_ESCOLA  = $id_escola";

//mysqli_query($conexao, $query);

mysqli_query($conexao, $query2);

header('location:index.php?pagina=escolas');
