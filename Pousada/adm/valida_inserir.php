<?php

	include '../cls/cliente.php';
	include '../cls/conexao.php';
	include '../cls/quartoClass.php';
	include '../cls/quartoAlugado.php';
	
	$nome=$_POST["nome"];
	$telefone=$_POST["telefone"];
	$email=$_POST["email"];
	$num=$_GET["num"];
	$diaEntrada=$_POST["diaEntrada"];
	$diaSaida=$_POST["diaSaida"];
?>	

<?php	
		$client= new clientClass();
		$q=new quartoClass();
		$a=new quartoAlugado();		
		$idCliente=$client -> inserir($nome,$telefone,$email);	
		$q->alteraStatusAlugado($num);
		
		$data1 = new DateTime($diaSaida);
		$data2 = new DateTime($diaEntrada);		
		
		$diff = date_diff( $data2, $data1);
		$total = $diff->y * 365.25 + $diff->m * 30 + $diff->d + $diff->h/24 + $diff->i / 60;		
		$recebe = $total * 250;
		//ver o retorno da data do banco,
	
		$a->inserirAluguel($num,$idCliente,$diaEntrada,$diaSaida,$recebe);
				
		//fazer metodo da class quarto alugado que recebe o idcliente(lastid) e o idquarto
		//quando for fazer o chekout seta o quarto como disp
			//header('Location: Principal.php');
?>