<?php if(!isset($_GET['editar'])){ ?> 
<h1>Inserir novo aluno</h1>
<form method="post" action="processa_aluno.php">
	<br>
	<label for="validationCustom01" class="form-label">Nome do aluno</label>
	<br>
	<input class="form-control" type="text" name="nome_aluno" id="validationCustom01" placeholder="Insira o nome do aluno" required>
	<div class="valid-feedback">
      Looks good!
    </div>
	<br><br>
	<label class="badge badge-secondary">Telefone</label>
	<br>
	<div class="form-group">
	<input class="form-control" type="text" name="telefone" id="telefone" placeholder="Insira o telefone do aluno" required>
	</div>
	<br><br>
	<label class="badge badge-secondary">E-mail</label>
	<br>
	<div class="form-group">
	<input class="form-control" type="email" name="email" placeholder="Insira o e-mail do aluno" required>
	</div>
	<br><br>
	<label class="badge badge-secondary">Data de nascimento</label>
	<br>
	<input class="form-control" type="text" name="data_nascimento" id="dataNasc" placeholder="Insira a data de nascimento" required>
	<br><br>
	<label class="badge badge-secondary">Genero</label>
	<br>
	<input class="form-control" type="text" name="genero" placeholder="Insira o genero do aluno" required>
	<br><br>
	<input class="btn btn-success" type="submit" value="Inserir aluno">
</form>

<?php } else { ?>
	<?php while($linha = mysqli_fetch_array($consulta_alunos)){ ?>
		<?php if($linha['id_aluno'] == $_GET['editar']){ ?>
			<h1>Editar aluno</h1>
			<form method="post" action="edita_aluno.php">
				<input type="hidden" name="id_aluno" value="<?php echo $linha['id_aluno']; ?>">
				<br>
				<label class="badge badge-secondary">Nome do aluno</label>
				<br>
				<input class="form-control" type="text" name="nome_aluno" placeholder="Insira o nome do aluno" value="<?php echo $linha['nome']; ?>" required>
				<br><br>
				<label class="badge badge-secondary">Telefone</label>
				<br>
				<input class="form-control" type="text" name="telefone" id="telefone" placeholder="Insira o telefone do aluno" value="<?php echo $linha['telefone']; ?>" required>
				<br><br>
				<label class="badge badge-secondary">E-mail</label>
				<br>
				<input class="form-control" type="text" name="email" placeholder="Insira o e-mail do aluno" value="<?php echo $linha['email']; ?>" required>
				<br><br>
				<label class="badge badge-secondary">Data de nascimento</label>
				<br>
				<input  class="form-control" type="text" id="dataNasc" name="data_nascimento" placeholder="Insira a data de nascimento" value="<?php echo $linha['data_nascimento']; ?>" required>
				<br><br>
				<label class="badge badge-secondary">Genero</label>
				<br>
				<input class="form-control" type="text" name="genero" placeholder="Insira o genero do aluno" value="<?php echo $linha['genero']; ?>" required>
				<br><br>
				<input class="btn btn-success" type="submit"  value="Editar aluno">
			</form>

		<?php } ?>
	<?php } ?>
<?php } ?>
