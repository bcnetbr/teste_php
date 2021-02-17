<h1>Inserir nova matricula</h1>


<form method="post" action="processa_matricula.php">
	<br>
	<p class="badge badge-secondary">Selecione a turma</p>
	<select class="form-control" name="escolha_turma">
		<option>Selecione a turma</option>
		<?php
			while($linha = mysqli_fetch_array($consulta_turmas)){
				echo '<option value="'.$linha['id_turma'].'">'.$linha['ano']." ".$linha['nivel_ensino']." ".$linha['serie']." ".$linha['turno'].'</option>';
			}

		?>
	</select>

	<br><br>

	<p class="badge badge-secondary">Selecione o aluno</p>
	<select class="form-control" name="escolha_aluno">
		<option>Selecione o aluno</option>
		<?php
			while($linha = mysqli_fetch_array($consulta_alunos)){
				echo '<option value="'.$linha['id_aluno'].'">'.$linha['nome'].'</option>';
			}

		?>
	</select>
	<br><br>

	<input class="btn btn-success" type="submit" value="Matricular aluno no curso">

</form>