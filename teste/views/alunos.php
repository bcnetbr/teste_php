<a class="btn btn-success" href="?pagina=inserir_aluno">Inserir novo aluno</a>
<table class="table table-hover table-striped" id="alunos">
	<thead>
		<tr>
			<th>Nome aluno</th>
			<th>Telefone</th>
			<th>E-mail</th>
			<th>Data nascimento</th>
			<th>Genero</th>
			<th>Editar</th>
			<th>Deletar</th>
		</tr>
	</thead>

	<tbody>
		<?php

			while($linha = mysqli_fetch_array($consulta_alunos)){
				echo '<tr><td>'.$linha["nome"].'</td>';
				echo '<td>'.$linha["telefone"].'</td>';
				echo '<td>'.$linha["email"].'</td>';
				echo '<td>'.$linha["data_nascimento"].'</td>';
				echo '<td>'.$linha["genero"].'</td>';
			
		?>
		<td><a href="?pagina=inserir_aluno&editar=<?php echo $linha['id_aluno']; ?>">
			<span style="color: #44b874"><i class="fas fa-user-edit"></i></span></a></td>
		<td><a href="deleta_aluno.php?id_aluno=<?php echo $linha['id_aluno']; ?>"><span style="color: tomato"><i class="fas fa-user-times"></i></span></a></td></tr>

		<?php
			}
		?>

	</tbody>

</table>