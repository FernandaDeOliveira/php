
<?php
	include '../cls/quartoAlugado.php';
	include '../cls/conexao.php';
?>

	<?php
		$quartos= new quartoAlugado();
		$quartos -> mostraAlugado();	
	?>
	
	<br>
	
	<br>
	<br>
	
	<table class='tabela' id='quartos' border="1">
	
		<tr>
			<td >Número do quarto</td>
			<td >Nome</td>
			<td >Telefone</td>
			<td >Dia da entrada</td>
			<td >Dia da saída</td>			
		</tr>
		
	<?php
		$result=$quartos -> getConsulta();
		while($linha= $result ->fetch_assoc())
		{		
	?>
			<tr>
				<td ><?php echo $linha['num'];?></td>
				<td ><?php echo $linha['nome'];?></td>
				<td ><?php echo $linha['telefone'];?></td>
				<td ><?php echo $linha['diaEntrada'];?></td>
				<td ><?php echo $linha['diaSaida'];?></td>							
			</tr>
	
	<?php 
	}
	?>
	</table>