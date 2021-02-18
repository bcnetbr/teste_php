<?php

//Inclui as configurações do banco de dados 
include 'db.php';

//Variavel que recebe o dado do formulario via get
$id_escola = $_GET['id_escola'];

//Exclui os dados da escola do banco de dados
$query2 = "DELETE FROM ESCOLAS WHERE ID_ESCOLA  = $id_escola";

//Executa o comando sql no banco de dados
mysqli_query($conexao, $query2);

//Retorna para pagina de exibição das escolas
header('location:index.php?pagina=escolas');
