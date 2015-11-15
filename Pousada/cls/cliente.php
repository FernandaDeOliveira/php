<?php
	class clientClass
	{
		var $id;
		var $nome;
		var $email;
		var $telefone;
		var $resultado;
		
		//metodo que executa uma consulta select no banco
		public function mostrar()
		{
			$Oconn= new conexao();
			$Oconn ->abrir();
			$sql='SELECT * from clientes';
			$conn=$Oconn -> getConexao();
			$this -> resultado=$conn->query($sql);
		}
		
		
		public function getConsulta()
		{
			return $this->resultado;
		}
		
		function inserir($nome,$telefone,$email){
			$Oconn= new conexao();
			$Oconn ->abrir();
			$sql="INSERT INTO clientes(nome,telefone,email)
					values('".$nome."','".$telefone."','".$email."')";	
			$conn = $Oconn ->getConexao();
			$this -> resultado = $conn -> query($sql);
				$last=$conn->insert_id;
				return $last;
			}
			
		function deletar($id){
			$Oconn= new conexao();
			$Oconn ->abrir();
			$sql="DELETE  FROM  clientes WHERE idCliente=".$id."";
			$conn = $Oconn ->getConexao();
			$this -> resultado = $conn -> query($sql);
		}
		
		function alterar($id,$nome,$email,$telefone){
			$Oconn= new conexao();
			$Oconn ->abrir();
			$sql="UPDATE  clientes SET nome='".$nome."',email='".$email."',telefone='".$telefone."' WHERE idCliente=".$id."";
									
			$conn = $Oconn ->getConexao();
			$this -> resultado = $conn -> query($sql);
		
		}
	}



?>