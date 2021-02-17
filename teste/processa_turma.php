<?php

include 'db.php';

$ano = $_POST['ano'];
$nivel = $_POST['nivel_ensino'];
$serie = $_POST['serie'];
$turno = $_POST['turno'];
$id_escola = $_POST['escolha_escola'];

$query = "INSERT INTO TURMAS(ano, nivel_ensino, serie, turno, id_escola) VALUES ('$ano', '$nivel', '$serie', '$turno', $id_escola)";

mysqli_query($conexao,$query);

header('location:index.php?pagina=turmas');
