<?php

#Base de dados
include 'db.php';

#Cabeçalho
include 'header.php';

#Conteúdo da página
if(isset($_GET['pagina'])){
	$pagina = $_GET['pagina'];
}
else{
	$pagina='home';
}

switch ($pagina) {
	case 'turmas': 
		include 'views/turmas.php';
		# code...
		break;

	case 'inserir_turma': 
		include 'views/inserir_turma.php';
		# code...
		break;

	case 'alunos': 
		include 'views/alunos.php';
		# code...
		break;

	case 'inserir_aluno': 
		include 'views/inserir_aluno.php';
		# code...
		break;

	case 'escolas': 
		include 'views/escolas.php';
		# code...
		break;

	case 'inserir_escola': 
		include 'views/inserir_escola.php';
		# code...
		break;

	case 'matriculas': 
		include 'views/matriculas.php';
		# code...
		break;

	case 'inserir_matricula': 
		include 'views/inserir_matricula.php';
		# code...
		break;
	
	default:
		include 'views/home.php';
		# code...
		break;
}

#Rodapé
include 'footer.php';