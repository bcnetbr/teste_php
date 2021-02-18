<?php
//Inclui as configurações do banco de dados 
include 'db.php';

//Variavel que recebe o dado do formulario via get
$id_aluno = $_GET['id_aluno'];



//Exclui os dados do aluno do banco de dados
$query = "DELETE FROM ALUNOS WHERE ID_ALUNO  = $id_aluno";

//Executa o comando sql no banco de dados
mysqli_query($conexao, $query);


//Retorna para pagina de exibição dos alunos
header('location:index.php?pagina=alunos');
