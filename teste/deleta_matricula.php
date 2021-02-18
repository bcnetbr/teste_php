<?php

//Inclui as configurações do banco de dados 
include 'db.php';

//Variavel que recebe o dado do formulario via get
$id_aluno_de_turma = $_GET['id_aluno_de_turma'];

//Exclui os dados da matricula do banco de dados
$query = "DELETE FROM ALUNOS_DE_TURMAS WHERE ID_ALUNO_DE_TURMA  = $id_aluno_de_turma";

//Executa o comando sql no banco de dados
mysqli_query($conexao, $query);

//Retorna para pagina de exibição das matriculas realizadas
header('location:index.php?pagina=matriculas');
