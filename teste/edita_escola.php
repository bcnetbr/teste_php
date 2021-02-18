<?php

//Inclui as configurações do banco de dados 
include 'db.php';

//Variaveis que recebem os dados do formulario via post
$id_escola = $_POST['id_escola'];
$nome_escola = $_POST['nome_escola'];
$endereco = $_POST['endereco'];
$data = $_POST['data'];
$situacao = $_POST['situacao'];

//Atualiza os dados da escola no banco de dados
$query = "UPDATE ESCOLAS SET nome_escola='$nome_escola', endereco='$endereco',data='$data',situacao='$situacao' WHERE id_escola=$id_escola";

//Executa o comando sql no banco de dados
mysqli_query($conexao,$query);

//Retorna para pagina de exibição dos alunos
header('location:index.php?pagina=escolas'); 