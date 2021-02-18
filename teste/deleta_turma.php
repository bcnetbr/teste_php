<?php

//Inclui as configurações do banco de dados 
include 'db.php';

//Variavel que recebe o dado do formulario via get
$id_turma = $_GET['id_turma'];

//Exclui os dados da turma do banco de dados
$query2 = "DELETE FROM TURMAS WHERE ID_TURMA  = $id_turma";

//Executa o comando sql no banco de dados
mysqli_query($conexao, $query2);

//Retorna para pagina de exibição das turmas
header('location:index.php?pagina=turmas');

