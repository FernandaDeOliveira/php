
<html>
	<head>
	<meta http-equiv="Content-type" content="text/html;charset=utf-8" />
	<title>Página inicial</title>
	<link href="style.css" type="text/css" rel="stylesheet"/>
	<link href="link.css" type="text/css" rel="stylesheet"/>
<link href="../css/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	</head>

<body>

<div id="principal">
	<div id="cabecalho">
		<img src="img/logo.png" style="	float:left">Pousada Azul 
		<p>
	
	</div>
	<div id="dentroCabeçalho">
			<a href="?m=s" >Sobre</a>     <a href="?m=h" >Quartos</a> <a href="?m=l" >Localização</a> <a href="?m=c" >Contato</a>
		</div>
	<div id="corpo">
							

		<div id="centro">									
			<?php 
				if(!isset($_GET['m']))
					require_once('sobre.php');
				else{
					switch($_REQUEST['m']){
									
						case 's':
						require_once('sobre.php');
						break;
						
						case 'h':
						require_once('quartos.php');
						break;	
						
						case 'l':
						require_once('localidade.php');
						break;	
				
						
					
					}
				}
			?>		
			
			
			
		</div>
		
		<div style="clear: both;"></div>
		
	</div>

	<div id="rodape">		
			<u><a href="adm/login.php" style="color: black">Administrador</a><br></b>	
	</div>
	
</div>

</body>
</html>