</div>

<footer>
	<div class="container">
		©2018 Controle de escola - Todos os direitos reservados.
	</div>

	<script src="js/jquery.js"></script>
	<script src="//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/
	jquery.mask/1.14.11/jquery.mask.min.js"></script>
	<script src="jquery.maskedinput.js" type="text/javascript"></script>

	<script>
		$(document).ready( function () {
    		$('#turmas').DataTable();
    		$('#alunos').DataTable();
    		$('#escolas').DataTable();
    		$('#matriculas').DataTable();
		} );
	</script>
	<script>
	jQuery(function($){
   	$("#dataNasc").mask("99-99-9999");
   	$("#telefone").mask("(99)99999-9999");
   	$("#data").mask("99-99-9999");
   	});
	</script>

</footer>
</body>
</html>
