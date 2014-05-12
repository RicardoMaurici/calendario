<?php
	session_start();
	
	$db = mysql_connect('localhost', 'root', '');
	mysql_select_db("bobs");
	if(!isset($_GET['atualizar'])){
	$_SESSION['cod'] = $_GET["cod"];
	$query = "select * from produtos where cod=".$_GET["cod"];
	
	//echo $query; die();
	$result  = mysql_query($query);
	
	$row = mysql_fetch_array($result);
	}else{
		//$query = "UPDATE produtos SET quantidade = ".$_POST['quantidade']. 
		//									" WHERE " ."cod = ".$_SESSION['cod'];
		
		//$result  = mysql_query($query);
		
		$query = "UPDATE produtos SET item = "."'".$_POST["item"]."'". ", quantidade = ".$_POST['quantidade'].
		", valor = ".$_POST['valor']." where cod = ".$_SESSION['cod'];
		//echo $query; die();
		$result  = mysql_query($query);
		$query = "SELECT * FROM produtos where cod = ".$_SESSION['cod'];
		$result  = mysql_query($query);
		
		$row = mysql_fetch_array($result);
	 
	}
	?>
	
<form action="atualizar.php?atualizar=1" method=post>
	<table border=0>
		<tr bgcolor=#cccccc>
			<td width=150>Item</td>
			<td width=15>Quantidade</td>
			<td width=30>Valor</td>
		</tr>
		<tr>
			<td><input type="text" name="item" size="40" maxlength="40" value = <?php echo $row["item"]?>> </td>
			<td align="center"><input type="text" name="quantidade" size="3" maxlength="3" value = <?php echo $row["quantidade"]?>></td>
			<td><input type="text" name="valor" size="9" maxlength="9" value = <?php echo $row["valor"]?>></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" value="Incluir"></td>
		</tr> 
	</table>
</form>
<p>
<a href = "bobs.html">Voltar</a>
</p>