<?php ob_start(); ?>

<div class="row">
    <div class="col l12 s12">
        <div class="titulo-topo">
        	<h2 class="title2">Bem Vindo!</h2>
     	</div>
        <div>
        	<p style="text-align:center;">Implementar um CRUD em php/mysql</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col l12 s12">
            <img style="text-align:center;" src="img/oqueé.png" alt="O que é PHP?">
    </div>
</div>



<?php
	$conteudo = ob_get_contents();
	ob_end_clean();
	$titulo = "ATIVIDADE APS";
	include "layout.php";
?>