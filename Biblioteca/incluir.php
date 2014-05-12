<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Bob´s Auto Parts - Order Results</title>
</head>
<body>
	<form action="incluir.php?incluir=1" method=post>
	<table border=0>
		<tr bgcolor=#cccccc>
			<td width=150>Item</td>
			<td width=15>Quantidade</td>
			<td width=30>Valor</td>
		</tr>
		<tr>
			<td><input type="text" name="item" size="40" maxlength="40"> </td>
			<td align="center"><input type="text" name="quantidade" size="3" maxlength="3"></td>
			<td><input type="text" name="valor" size="9" maxlength="9"></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" value="Incluir"></td>
		</tr> 
	</table>
	</form>
	<p>
<a href = "bobs.html">Voltar</a>
</p>
</body>
</html>


<?php
$incluir = $_GET["incluir"];
if($incluir == 1){
	
	$item = $_POST["item"];
	$quantidade = $_POST["quantidade"];
	$valor = $_POST["valor"];
	
	$db = mysql_connect('localhost', 'root', '');
 	mysql_select_db("bobs");
 	//INSERT INTO `bobs`.`produtos` (`cod`, `item`, `quantidade`) VALUES (NULL, 'pneu', '2');
 	
 	$query = "insert into produtos (`cod`, `item`, `quantidade`, `valor`) values(null,'$item','$quantidade','$valor')";
 	
 //	echo $query; die();
 	
 	$result  = mysql_query($query);
}


?>
	