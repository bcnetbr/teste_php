<?php

//Configurações de acesso ao banco de dados
$servidor = "localhost";
$usuario = "root";
$senha ="Br302205#";
$db = "controle_escola";

//variavel de conexão
$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

//Seleciona todas as turmas cadastradas
$query = "SELECT turmas.id_turma, turmas.ano, turmas.nivel_ensino, turmas.serie, turmas.turno, escolas.id_escola, escolas.nome_escola FROM TURMAS, ESCOLAS WHERE turmas.id_escola = escolas.id_escola";
$consulta_turmas = mysqli_query($conexao, $query);

//Seleciona todos os alunos
$query = "SELECT * FROM ALUNOS";
$consulta_alunos = mysqli_query($conexao, $query);

//Seleciona e mostra as escolas cadastradas e sua quantidade de alunos
$query = "SELECT escolas.id_escola, escolas.nome_escola, escolas.endereco, escolas.data, escolas.situacao, count(alunos_de_turmas.id_aluno_de_turma) AS total_alunos  FROM alunos_de_turmas,turmas,escolas WHERE turmas.id_escola = escolas.id_escola AND turmas.id_turma = alunos_de_turmas. id_turma GROUP BY nome_escola;";
$consulta_escolas = mysqli_query($conexao, $query);

//Seleciona todas as escolas cadastradas
$query = "SELECT * FROM ESCOLAS";
$consulta_escolas2 = mysqli_query($conexao, $query);

//Seleciona todas turmas cadstradas 
$query = "SELECT escolas.id_escola, escolas.nome_escola, alunos_de_turmas.id_aluno_de_turma,turmas.id_escola, turmas.ano, turmas.nivel_ensino, turmas.serie, turmas.turno, alunos.nome
	FROM ESCOLAS,ALUNOS, TURMAS, ALUNOS_DE_TURMAS 
	WHERE alunos_de_turmas.id_aluno = alunos.id_aluno 
	AND alunos_de_turmas.id_turma = turmas.id_turma
	AND turmas.id_escola = escolas.id_escola";
	
$consulta_matriculas = mysqli_query($conexao, $query);

