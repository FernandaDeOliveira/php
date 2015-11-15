
<?php
	include '../cls/quartoClass.php';
	include '../cls/conexao.php';
?>

	<?php
	//instancia o obj e conecta no banco
		$quartos=new quartoClass();
		$quartos -> mostrarQuarto();	
	?>
	
	<br>
	
	<br>
	<br>
	
	<table  id='quartos' border="1">
	
		<tr>
			<td >Número</td>
			<td >Status</td>
			<td >Descrição</td>
			<td >Preço</td>
			<td >Número de pessoas</td>			
		</tr>
		
	<?php
		$result=$quartos -> getConsulta();
		//fetch percorre linha a linha do array por vez
		while($linha= $result ->fetch_assoc())
		{		
	?>
			<tr>
				<td ><?php echo $linha['num'];?></td>
				<td ><?php echo $linha['status'];?></td>
				<td ><?php echo $linha['descricao'];?></td>
				<td ><?php echo $linha['preco'];?></td>
				<td ><?php echo $linha['qtdPessoas'];?></td>
				<td ><button><a href="?m=add&num=<?php echo $linha['num'];?>" class="linkCorpo">Novo cliente</a></td></button>
				<td ><button><a href="?m=addExiste&num=<?php echo $linha['num'];?>" class="linkCorpo">Pesquisar</a></td></button>			
			</tr>
	
	<?php 
	}
	?>
	</table>