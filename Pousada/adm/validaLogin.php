<?php

	include '../cls/admClass.php';
	include '../cls/conexao.php';
	
	$usuario=$_POST["usuario"];
	$senha=$_POST["senha"];
?>	
	<?php
	
		$user= new admClass();
		$user -> consultar($usuario);	
	?>

	<?php
		$result=$user -> getConsulta();
		if($linha= $result ->fetch_assoc())
		{
			if($linha['senha']==$senha){
					header('Location: Principal.php');
			}else
			print("Usuário ou senha inválidos");
		}
	?>