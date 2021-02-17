<?php

//Inclui as configurações do banco de dados 
include 'db.php';

//Variaveis que recebem os dados do formulario via post
$nome_aluno = $_POST['nome_aluno'];
$nome_escola = $_POST['nome_escola'];
$endereco = $_POST['endereco'];
$data = $_POST['data'];
$situacao = $_POST['situacao'];

//Inseri os dados da escola no banco de dados
$query = "INSERT INTO ESCOLAS(nome_escola, endereco, data, situacao) VALUES ('$nome_escola','$endereco', '$data', '$situacao')";

//Executa o comando sql no banco de dados
mysqli_query($conexao,$query);

//Retorna para pagina de exibição das escolas
header('location:index.php?pagina=escolas');
