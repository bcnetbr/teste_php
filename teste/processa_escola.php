<?php

include 'db.php';

$nome_escola = $_POST['nome_escola'];
$endereco = $_POST['endereco'];
$data = $_POST['data'];
$situacao = $_POST['situacao'];


$query = "INSERT INTO ESCOLAS(nome_escola, endereco, data, situacao) VALUES ('$nome_escola','$endereco', '$data', '$situacao')";

mysqli_query($conexao,$query);

header('location:index.php?pagina=escolas');
