<?php

	class conexao
	{
		var $conn;//propriedade
		
		function abrir()
		{
			$servername='localhost';
			$username='root';
			$password='vertrigo';
			$dataBaseName='lpw_pousada';
			
			$this->conn=new mysqli($servername,$username,$password,$dataBaseName);
		}
		
		function getConexao()
		{
			return $this->conn;
		}
	}



?>