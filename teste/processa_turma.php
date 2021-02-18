<?php

//Inclui as configurações do banco de dados 
include 'db.php';

//Variaveis que recebem os dados do formulario via post
$ano = $_POST['ano'];
$nivel = $_POST['nivel_ensino'];
$serie = $_POST['serie'];
$turno = $_POST['turno'];
$id_escola = $_POST['escolha_escola'];

//Inseri os dados da turma no banco de dados
$query = "INSERT INTO TURMAS(ano, nivel_ensino, serie, turno, id_escola) VALUES ('$ano', '$nivel', '$serie', '$turno', $id_escola)";

//Executa o comando sql no banco de dados
mysqli_query($conexao,$query);

//Retorna para pagina de exibição das turmas
header('location:index.php?pagina=turmas');
