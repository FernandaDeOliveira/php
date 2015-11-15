<?php
	class admClass
	{
		var $idUser;
		var $login;
		var $senha;
		var $resultado;
		
		
		public function consultar($login)
		{
			$Oconn= new conexao();
			$Oconn ->abrir();
			$sql="SELECT * from adm WHERE login='".$login."'";
			$conn=$Oconn -> getConexao();
			$this -> resultado=$conn->query($sql);
		}
	
		
		public function getConsulta()
		{
			return $this->resultado;
		}
	}



?>