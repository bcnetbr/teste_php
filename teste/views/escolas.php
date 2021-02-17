<a class="btn btn-success" href="?pagina=inserir_escola">Inserir nova escola</a>
<table class="table table-hover table-striped" id="escolas">
	<thead>
		<tr>
			<th>Nome da escola</th>
			<th>Endereço</th>
			<th>Data</th>
			<th>Situação</th>
			<th>Total de alunos</th>
			<th>Editar</th>
			<th>Deletar</th>
		</tr>
	</thead>

	<tbody>
		<?php

			while($linha = mysqli_fetch_array($consulta_escolas)){
				echo '<tr><td>'.$linha["nome_escola"].'</td>';
				echo '<td>'.$linha["endereco"].'</td>';
				echo '<td>'.$linha["data"].'</td>';
				echo '<td>'.$linha["situacao"].'</td>';
				echo '<td>'.$linha["total_alunos"].'</td>';
				
			
		?>
		<td><a href="?pagina=inserir_escola&editar=<?php echo $linha['id_escola']; ?>">
			<span style="color: #44b874"><i class="fas fa-user-edit"></i></span></a></td>
		<td><a href="deleta_escola.php?id_escola=<?php echo $linha['id_escola']; ?>"><span style="color: tomato"><i class="fas fa-user-times"></i></span></a></td></tr>

		<?php
			}
		?>

	</tbody>

</table>