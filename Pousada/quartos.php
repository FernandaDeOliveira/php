<?php
	include 'cls/quartoClass.php';
	include 'cls/conexao.php';
?>

	<?php

		$quartos=new quartoClass();
		$quartos -> mostrarTudo();
			
	$result=$quartos -> getConsulta();
		while($linha= $result ->fetch_assoc())
		{	
	?>
	<div class="q"  id="quartos" >
		<img src="img/pousada.jpg"  style="width:250px;height:200px;">Número:<?php echo $linha['num'];?><br>Descrição:<?php echo $linha['descricao'];?><br>
																Preço:<?php echo $linha['preco'];?><br>Quantidade de Pessoas:<?php echo $linha['qtdPessoas'];?>
																<br>
																<a href="?m=quartoFotos&num=<?php echo $linha['num'];?>" style="color:blue">Mais fotos</a>
			
			<p id="diferença">* Os preços poderão sofrer alterações em feriados e finais de semana.
		</div>
	

	
	<?php 
	}
	?>





