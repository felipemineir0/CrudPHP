<?php
	ob_start();
?>
	<div id="cadastrarEndereco">
		<?php include "formulario.php"; ?>
	</div>

	<div id="tabela">
		<?php include "visualizar.php" ?>
	</div>

<?php
 	$conteudo = ob_get_contents();
	$titulo = "Cadastro de Endereço";
 	ob_end_clean ();
	include ('../layout.php');
?>