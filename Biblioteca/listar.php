<?php
 	$db = mysql_connect('localhost', 'root', '');
 	mysql_select_db("bobs");
 	$query = "select * from produtos";
 	$result  = mysql_query($query);
 	$num_results = mysql_num_rows($result);
 	echo '<strong>Há '.$num_results.' itens no estoque</strong>';
 	for($i=0; $i<$num_results;$i++){
 		$row = mysql_fetch_array($result);
 		echo '<p><strong>'.($i+1).'. COD: ';
 		echo htmlspecialchars($row['cod']).'</p>';
 		echo '<p><strong>'.($i+1).'. Item: ';
 		echo htmlspecialchars($row['item']);
 		echo '<strong><br/>Quantidade: ';
 		echo stripslashes($row['quantidade']);
 		echo '<strong><br/>Valor: ';
 		echo stripcslashes($row['valor']);
 		$x = $row['cod'];
 		echo " <br/><a href = 'deletar.php?cod=$x'>deletar</a>";
 		echo " <a href = 'atualizar.php?cod=$x'>atualizar</a>";
 		echo '</p>';
 		
 	}
 ?>
 
 <p>
<a href = "bobs.html">Voltar</a>
</p>