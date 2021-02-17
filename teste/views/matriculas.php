<a class="btn btn-success" href="?pagina=inserir_matricula">Inserir nova matricula</a>
<table class="table table-hover table-striped" id="matriculas">
	<thead>
		<tr>
			<th>Ano da turma</th>
			<th>Nivel</th>
			<th>Serie</th>
			<th>Turno</th>
			<th>Nome do aluno</th>
			<th>Deletar</th>
		</tr>
	</thead>

	<tbody>
		<?php

			while($linha = mysqli_fetch_array($consulta_matriculas)){
				echo '<tr><td>'.$linha["ano"].'</td>';
				echo '<td>'.$linha["nivel_ensino"].'</td>';
				echo '<td>'.$linha["serie"].'</td>';
				echo '<td>'.$linha["turno"].'</td>';
				echo '<td>'.$linha["nome"].'</td>';
			
		?>

			<td><a href="deleta_matricula.php?id_aluno_de_turma=<?php echo $linha['id_aluno_de_turma']; ?>"><span style="color: tomato"><i class="fas fa-trash-alt"></i></span></a></td></tr>

		<?php
			}
		?>

	</tbody>

</table>