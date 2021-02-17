<?php

include 'db.php';

$id_escola = $_POST['id_escola'];
$nome_escola = $_POST['nome_escola'];
$endereco = $_POST['endereco'];
$data = $_POST['data'];
$situacao = $_POST['situacao'];


$query = "UPDATE ESCOLAS SET nome_escola='$nome_escola', endereco='$endereco',data='$data',situacao='$situacao' WHERE id_escola=$id_escola";

mysqli_query($conexao,$query);

header('location:index.php?pagina=escolas'); 