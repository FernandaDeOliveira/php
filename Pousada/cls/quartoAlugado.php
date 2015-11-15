<?php
	class quartoAlugado
	{
		var $numQuarto;
		var $idCliente;
		var $diaEntrada;
		var $diaSaida;
		var $horario;
		var $resultado;
		
		public function mostraAlugado()
		{
			$Oconn= new conexao();
			$Oconn ->abrir();
			$sql='select qa.*, c.*, q.* from quartoalugado qa inner join clientes c on qa.idcliente=c.id inner join quartos q on qa.numQuarto=q.num WHERE status=2';		
			$conn=$Oconn -> getConexao();
			$this -> resultado=$conn->query($sql);
		}
	
		function inserirAluguel($numQuarto,$idCliente,$diaEntrada,$diaSaida,$recebe){
			$Oconn= new conexao();
			$Oconn ->abrir();
			$sql="INSERT INTO quartoalugado(numQuarto,idCliente,diaEntrada,diaSaida,valorTotal)
				values(".$numQuarto.",".$idCliente.",'".$diaEntrada."','".$diaSaida."',".$recebe.")";						
				echo $sql;	
							
			$conn = $Oconn ->getConexao();
			$this -> resultado = $conn -> query($sql);
				
			}
			
		public function getConsulta()
		{
			return $this->resultado;
		}
		
	
	
	}



?>