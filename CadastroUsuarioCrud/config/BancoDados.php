<?php

	class BancoDados{

		private static $conexao;
		public static function obterConexao(){

			//if( !isset($conexao)){
			if( isset($conexao) == false){
				$conexao = new PDO("mysql:dbname=scriptbd;host=localhost","root","");
				$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}

			return $conexao;
		}
	}
?>