<?php

include 'db.php';

$id_turma = $_POST['id_turma'];
$ano = $_POST['ano'];
$nivel = $_POST['nivel_ensino'];
$serie = $_POST['serie'];
$turno = $_POST['turno'];
$id_escola = $_POST['id_escola'];

$query = "UPDATE TURMAS SET ano='$ano', nivel_ensino='$nivel', serie='$serie', turno='$turno', id_escola = $id_escola WHERE id_turma=$id_turma";

mysqli_query($conexao,$query);

header('location:index.php?pagina=cursos'); 