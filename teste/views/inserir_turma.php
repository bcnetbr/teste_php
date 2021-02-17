<?php if(!isset($_GET['editar'])){ ?> 
<h1>Inserir novo curso</h1>
<form method="post" action="processa_turma.php">
	<br>
	<label class="badge badge-secondary">Ano</label>
	<br>
	<input class="form-control" type="text" name="ano" placeholder="Insira o ano da turma" required>
	<br><br>
	<label class="badge badge-secondary">Nivel</label>
	<br>
	<input class="form-control"type="text" name="nivel_ensino" placeholder="Insira o nivel da turma" required>
	<br><br>
	<label class="badge badge-secondary">Serie</label>
	<br>
	<input class="form-control"type="text" name="serie" placeholder="Insira a serie da turma" required>
	<br><br>
	<label class="badge badge-secondary">Turno</label>
	<br>
	<input class="form-control"type="text" name="turno" placeholder="Insira o turno da turma" required>
	<br><br>
	<p class="badge badge-secondary">Selecione a escola</p>
	<select class="form-control" name="escolha_escola">
		<option>Selecione uma escola</option>
		<?php
			while($linha = mysqli_fetch_array($consulta_escolas2)){
				echo '<option value="'.$linha['id_escola'].'">'.$linha['nome_escola'].'</option>';
			}

		?>
	</select>
	<br>
	<input class="btn btn-success" type="submit" value="Inserir turma">
	<a class="btn btn-danger" href="?pagina=turmas">Cancelar</a>
</form>

<?php } else { ?>
	<?php while($linha = mysqli_fetch_array($consulta_turmas)){ ?>
		<?php if($linha['id_turma'] == $_GET['editar']){ ?>
			<h1>Editar curso</h1>
			<form method="post" action="edita_turma.php">
				<input type="hidden" name="id_turma" value="<?php echo $linha['id_turma']; ?>">
				<br>
				<label class="badge badge-secondary">Ano</label>
				<br>
				<input class="form-control" type="text" name="ano" placeholder="Insira o ano da turma" value="<?php echo $linha['ano'];	?>" required>
				<br><br>
				<label class="badge badge-secondary">Nivel</label>
				<br>
				<input class="form-control" type="text" name="nivel_ensino" placeholder="Insira o nivel da turma" value="<?php echo $linha['nivel_ensino'];?>">
				<br><br>
				<label class="badge badge-secondary">Serie</label required>
				<br>
				<input class="form-control" type="text" name="serie" placeholder="Insira a serie da turma" value="<?php echo $linha['serie'];?>" required>
				<br><br>
				<label class="badge badge-secondary">turno</label>
				<br>
				<input class="form-control" type="text" name="turno" placeholder="Insira o turno da turma" value="<?php echo $linha['turno'];?>" required>
				<br><br>
				<label class="badge badge-secondary">Escola</label>
				<br>
				<input class="form-control" type="text" name="escola" placeholder="Insira a escola da turma" value="<?php echo $linha['nome_escola'];?>">
				<input type="hidden" name="id_escola" value="<?php echo $linha['id_escola']; ?>" required>
				<br><br>

				<input class="btn btn-success" type="submit" value="Editar turma">
				<a class="btn btn-danger" href="?pagina=turmas">Cancelar</a>
			</form>
		<?php } ?>
	<?php } ?>
<?php } ?>

