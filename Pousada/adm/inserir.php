	

<?php $num=$_GET["num"];
//<br>Status do quarto<input type="text" name="status" size="25" value="" required><br><br><input type="submit" value="OK" class="btn btn-success">
		
?>
<form method="POST" action="?m=valida&num=<?php echo $num?>" id="inserir">
		<br>Nome:<input type="text" name="nome" size="25"value="" required>
		<br>Telefone:<input type="text" name="telefone" size="25" value="" required>
		<br>E-mail:<input type="text" name="email" size="25" value="" required>
		<br>Dia de entrada:<input type="date" name="diaEntrada" size="25" value="" required>
		<br>Dia de saída:<input type="date" name="diaSaida" size="25" value="" required>
		
		<br><br><button type="submit"  class="btn btn-success">OK</button>
		<input type="submit" value="Limpar" class="btn btn-danger">
 </form>
 