<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/CadastroUsuarioCrud/config/BancoDados.php";

class CadastrarEnderecoModel{

	private $bd;

	function __construct(){
		$this->bd = BancoDados::obterConexao();
	}

	public function inserir($logadouro, $numero, $bairro, $cidade, $cep, $complemento, $uf){
		$insercao = $this->bd->prepare("INSERT INTO endereco(Logradouro, Numero, Bairro, Cidade, CEP, Complemento, CodigoIbge) values(:end, :nume, :bai, :cid, :cep, :compl, :uf)");

		$insercao->bindParam(":end", $logadouro);
		$insercao->bindParam(":nume", $numero);
		$insercao->bindParam(":bai", $bairro);
		$insercao->bindParam(":cid", $cidade);
		$insercao->bindParam(":cep", $cep);
		$insercao->bindParam(":compl", $complemento);
		$insercao->bindParam(":uf", $uf);

		$insercao->execute();	
	}

	public function todas(){
		$consulta = $this->bd->query("SELECT endereco.IdEndereco, endereco.Logradouro, endereco.Numero, endereco.Bairro, endereco.Cidade, endereco.CEP, endereco.Complemento, unidadefederativa.NomeEstado FROM endereco INNER JOIN unidadefederativa ON endereco.CodigoIbge = unidadefederativa.CodigoIbge");
		$endereco = $consulta->fetchAll();
		return $endereco;
	}


	public function excluir($id){
		$exclusao = $this->bd->prepare("DELETE from endereco where IdEndereco = :id");
		$exclusao->bindParam(":id", $id);
		$exclusao->execute();
	}

	public function consultarPorId($IdEndereco){
		$consulta = $this->bd->prepare("SELECT * FROM endereco where IdEndereco = :id");
		$consulta->bindParam(":id", $IdEndereco);
		$consulta->execute();

		$endereco = $consulta->fetch();
		return $endereco;
	}

	public function update($IdEndereco, $logadouro, $numero, $bairro, $cidade, $cep, $complemento, $uf){
		$consulta = $this->bd->prepare("UPDATE endereco SET Logradouro = :end, Numero = :nume, Bairro = :bai, Cidade = :cid, CEP = :cep, Complemento = :compl, CodigoIbge = :uf where IdEndereco = :id");
		$consulta->bindParam(":id", $IdEndereco);
		$consulta->bindParam(":end", $logadouro);
		$consulta->bindParam(":nume", $numero);
		$consulta->bindParam(":bai", $bairro);
		$consulta->bindParam(":cid", $cidade);
		$consulta->bindParam(":cep", $cep);
		$consulta->bindParam(":compl", $complemento);
		$consulta->bindParam(":uf", $uf);


		$consulta->execute();
	}

}


?>