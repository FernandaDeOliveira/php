<html>
	<head>
	<meta http-equiv="Content-type" content="text/html;charset=utf-8" />
	<title>Página inicial</title>
	
	<link href="../css/styleA.css" type="text/css" rel="stylesheet"/>
	<link href="../css/linkA.css" type="text/css" rel="stylesheet"/>
	
	</head>

<body>

<div id="principal">
	<div id="cabecalho">
		<p>
	
	</div>
	<div id="dentroCabeçalho">
	
			<a class="menu" href="?m=q" >Vagos</a>  <a  class="menu" href="?m=qA" >Alugados</a>  <a class="menu" href="?m=c">Clientes</a> 
		</div>
	<div id="corpo">
				

		<div id="centro">									
			<?php 
				if(!isset($_GET['m']))
					require_once('home.php');
				else{
					switch($_REQUEST['m']){
									
						case 'h':
						require_once('home.php');
						break;
						
						case 'q':
						require_once('vagos.php');
						break;
						
						case 'add':
						require_once('inserir.php');
						break;
						
						
						case 'valida':
						require_once('valida_inserir.php');
						break;
							
						case 'qA':
						require_once('alugados.php');
						break;
				
						
					
					}
				}
			?>		
			
			
			
		</div>
		
		<div style="clear: both;"></div>
		
	</div>

	<div id="rodape">		
			
	</div>
	
</div>

</body>
</html>