<a class="btn btn-success" href="?pagina=inserir_turma">Inserir nova turma</a>
<table class="table table-hover table-striped" id="turmas">
	<thead>
		<tr>
			<th>Ano</th>
			<th>Nivel</th>
			<th>Serie</th>
			<th>Turno</th>
			<th>Escola</th>
			<th>Editar</th>
			<th>Deletar</th>
		</tr>
	</thead>

	<tbody>
		<?php

			while($linha = mysqli_fetch_array($consulta_turmas)){
				echo '<tr><td>'.$linha["ano"].'</td>';
				echo '<td>'.$linha["nivel_ensino"].'</td>';
				echo '<td>'.$linha["serie"].'</td>';
				echo '<td>'.$linha["turno"].'</td>';
				echo '<td>'.$linha["nome_escola"].'</td>';
				
		?>		
				<td><a href="?pagina=inserir_turma&editar=<?php echo $linha['id_turma']; ?>"><span style="color: #44b874"><i class="fas fa-edit"></i></span></a></td>		
				<td><a href="deleta_turma.php?id_turma=<?php echo $linha['id_turma']; ?>"><span style="color: tomato"><i class="fas fa-trash-alt"></i></span></a></td></tr>

		<?php
		}
	?>
	</tbody>

</table>
