<?php
	class quartoClass
	{
		var $num;
		var $status;
		var $preço;
		var $descricao;
		var $resultado;
		
		public function mostrarQuarto()
		{
			$Oconn= new conexao();
			$Oconn ->abrir();
			$sql='SELECT * from quartos WHERE status=1';
			$conn=$Oconn -> getConexao();
			$this -> resultado=$conn->query($sql);
		}
		
			public function mostrarTudo()
		{
			$Oconn= new conexao();
			$Oconn ->abrir();
			$sql='SELECT * from quartos';
			$conn=$Oconn -> getConexao();
			$this -> resultado=$conn->query($sql);
		}
		
		
		public function getConsulta()
		{
			return $this->resultado;
		}
		
		public function alteraStatusAlugado($num){
			$Oconn= new conexao();
			$Oconn ->abrir();
			$sql="UPDATE quartos SET status=2 WHERE num='".$num."'";
			$conn=$Oconn -> getConexao();
			$this -> resultado=$conn->query($sql);
		}
		
			public function alteraStatusVago($num){
			$Oconn= new conexao();
			$Oconn ->abrir();
			$sql="UPDATE quartos SET status=1 WHERE num='".$num."'";
			$conn=$Oconn -> getConexao();
			$this -> resultado=$conn->query($sql);
		}
	
	}
	



?>