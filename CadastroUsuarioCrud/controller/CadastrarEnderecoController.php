<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/CadastroUsuarioCrud/model/CadastrarEnderecoModel.php";

$CadastrarEnderecoModel = new CadastrarEnderecoModel();

$acao = $_GET["acao"];

if($acao == "create"){
	$logadouro = $_POST["logadouro"];
	$numero = $_POST["numero"];
	$bairro = $_POST["bairro"];
	$cidade = $_POST["cidade"];
	$cep = $_POST["cep"];
	$complemento = $_POST["complemento"];
	$uf = $_POST["uf"];

	$CadastrarEnderecoModel->inserir($logadouro, $numero, $bairro, $cidade, $cep, $complemento, $uf);

	echo "<p class='bg-success'>Usuário cadastrado com sucesso.</p>";
}

if($acao == "delete"){
	$IdEndereco = $_GET["id"];
	$CadastrarEnderecoModel->excluir($IdEndereco);
	echo "<p class='bg-danger'>Usuário excluído.</p>";
}

if($acao == "update"){
	$IdEndereco = $_POST["codigo"];
	$logadouro = $_POST["logadouro"];
	$numero = $_POST["numero"];
	$bairro = $_POST["bairro"];
	$cidade = $_POST["cidade"];
	$cep = $_POST["cep"];
	$complemento = $_POST["complemento"];
	$uf = $_POST["uf"];
	$CadastrarEnderecoModel->update($IdEndereco, $logadouro, $numero, $bairro, $cidade, $cep, $complemento, $uf);
	echo "<p class='bg-sucess'>Usuário editado com sucesso.</p>";
}


?>