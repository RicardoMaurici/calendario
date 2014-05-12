<?php
	echo 'deletar';
	$db = mysql_connect('localhost', 'root', '');
	mysql_select_db("bobs");
	$query = "delete from produtos where cod = ".$_GET["cod"];
	$result  = mysql_query($query);
	//$num_results = mysql_num_rows($result);
	
?>
<p>
<a href = "bobs.html">Voltar</a>
</p>