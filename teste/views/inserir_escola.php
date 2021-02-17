<?php if(!isset($_GET['editar'])){ ?> 
<h1>Inserir nova escola</h1>
<form method="post" action="processa_escola.php">
	<br>
	<label class="badge badge-secondary">Nome da escola</label>
	<br>
	<input class="form-control" type="text" name="nome_escola" placeholder="Insira o nome da escola" required>
	<br><br>
	<label class="badge badge-secondary">Endereço</label>
	<br>
	<input class="form-control" type="text" name="endereco" placeholder="Insira o endereço da escola" required>
	<br><br>
	<label class="badge badge-secondary">Data</label>
	<br>
	<input class="form-control" type="text" name="data" id="data" placeholder="Insira a data" required>
	<br><br>
	<label class="badge badge-secondary">Situação</label>
	<br>
	<input class="form-control" type="text" name="situacao" placeholder="Insira a situação da escola" required>
	<br><br>
	<input class="btn btn-success" type="submit" value="Inserir escola">
	<a class="btn btn-danger" href="?pagina=escolas">Cancelar</a>
</form>


<?php } else { ?>
	<?php while($linha = mysqli_fetch_array($consulta_escolas)){ ?>
		<?php if($linha['id_escola'] == $_GET['editar']){ ?>
			<h1>Editar escola</h1>
			<form method="post" action="edita_escola.php">
				<input type="hidden" name="id_escola" value="<?php echo $linha['id_escola']; ?>">
				<br>
				<label class="badge badge-secondary">Nome da escola</label>
				<br>
				<input class="form-control" type="text" name="nome_escola" placeholder="Insira o nome da escola" value="<?php echo $linha['nome_escola']; ?>" required>
				<br><br>
				<label class="badge badge-secondary">Endereço</label>
				<br>
				<input class="form-control" type="text" name="endereco" placeholder="Insira o endereço da escola" value="<?php echo $linha['endereco']; ?>" required>
				<br><br>
				<label class="badge badge-secondary">Data</label>
				<br>
				<input class="form-control" type="text" name="data" id="data" placeholder="Insira a data" value="<?php echo $linha['data']; ?>" required>
				<br><br>
				<label class="badge badge-secondary">Situação</label>
				<br>
				<input  class="form-control" type="text" name="situacao" placeholder="Insira a situação da escola" value="<?php echo $linha['situacao']; ?>" required>
				<br><br>
				<input class="btn btn-success" type="submit"  value="Editar escola">
				<a class="btn btn-danger" href="?pagina=escolas">Cancelar</a>
			</form>

		<?php } ?>
	<?php } ?>
<?php } ?>
