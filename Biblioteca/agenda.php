
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="agenda.css">
<script language="JavaScript" type="text/javascript">

function mudaFundo(pos){
	document.getElementById(pos).style.background='green';		
}
</script>
</head>

<body>

	<?php 

	if(empty($_GET['data'])){//navegaçao entre os meses
		$dia = date('d');
		$month = ltrim(date('m'),"0");
		$ano = date('Y');
	}else{
		$data = explode('/',$_GET['data']);//nova data
		$dia = $data[0];
		$month = $data[1];
		$ano = $data[2];
	}

	if($month==1){//mês anterior se janeiro mudar valor
		$mes_ant = 12;
		$ano_ant = $ano - 1;
	}else{
		$mes_ant = $month - 1;
		$ano_ant = $ano;
	}

	if($month==12){//proximo mês se dezembro tem que mudar
		$mes_prox = 1;
		$ano_prox = $ano + 1;
	}else{
		$mes_prox = $month + 1;
		$ano_prox = $ano;
	}

	$hoje = date('j');//função importante pego o dia corrente
	switch($month.$n){/*notem duas variaveis para o switch para identificar dia e limitar numero de dias*/
		case 1: $mes = "JANEIRO";
		$n = 31;
		break;
		case 2: $mes = "FEVEREIRO";// todo ano bixesto fev tem 29 dias
		$bi = $ano % 4;//anos multiplos de 4 são bixestos
		if($bi == 0){
			$n = 29;
		}else{
			$n = 28;
		}
		break;
		case 3: $mes = "MARÇO";
		$n = 31;
		break;
		case 4: $mes = "ABRIL";
		$n = 30;
		break;
		case 5: $mes = "MAIO";
		$n = 31;
		break;
		case 6: $mes = "JUNHO";
		$n = 30;
		break;
		case 7: $mes = "JULHO";
		$n = 31;
		break;
		case 8: $mes = "AGOSTO";
		$n = 31;
		break;
		case 9: $mes = "SETEMBRO";
		$n = 30;
		break;
		case 10: $mes = "OUTUBRO";
		$n = 31;
		break;
		case 11: $mes = "NOVEMBRO";
		$n = 30;
		break;
		case 12: $mes = "DEZEMBRO";
		$n = 31;
		break;
	}
	function pegaMes($mes){
		switch($mes){/*notem duas variaveis para o switch para identificar dia e limitar numero de dias*/
			case 1: $m = "JANEIRO";
			$n = 31;
			break;
			case 2: $m = "FEVEREIRO";// todo ano bixesto fev tem 29 dias
			$bi = $ano % 4;//anos multiplos de 4 são bixestos
			if($bi == 0){
				$n = 29;
			}else{
				$n = 28;
			}
			break;
			case 3: $m = "MARÇO";
			$n = 31;
			break;
			case 4: $m = "ABRIL";
			$n = 30;
			break;
			case 5: $m = "MAIO";
			$n = 31;
			break;
			case 6: $m = "JUNHO";
			$n = 30;
			break;
			case 7: $m = "JULHO";
			$n = 31;
			break;
			case 8: $m= "AGOSTO";
			$n = 31;
			break;
			case 9: $m = "SETEMBRO";
			$n = 30;
			break;
			case 10: $m = "OUTUBRO";
			$n = 31;
			break;
			case 11: $m = "NOVEMBRO";
			$n = 30;
			break;
			case 12: $m = "DEZEMBRO";
			$n = 31;
			break;
		}
		return $m;
	}
	
	$pdianu = mktime(0,0,0,$month,1,$ano);//primeiros dias do mes
	$dialet = date('D', $pdianu);//escolhe pelo dia da semana
	switch($dialet){//verifica que dia cai
		case "Sun": $branco = 0; break;
		case "Mon": $branco = 1; break;
		case "Tue": $branco = 2; break;
		case "Wed": $branco = 3; break;
		case "Thu": $branco = 4; break;
		case "Fri": $branco = 5; break;
		case "Sat": $branco = 6; break;
	}

	print '<table class="tabela" >';//construção do calendario
	print '<tr>';
	print '<td class="mes"><a href="?data='.$dia.'/'.$mes_ant.'/'.$ano_ant.'" title="Mês anterior">  &laquo; </a></td>';/*mês anterior*/
	print '<td class="mes" colspan="5">'.$mes.'/'.$ano.'</td>';/*mes atual e ano*/
	print '<td class="mes"><a href="?data='.$dia.'/'.$mes_prox.'/'.$ano_prox.'" title="Próximo mês">  &raquo; </a></td>';/*Proximo mês*/
	print '</tr><tr>';
	print '<td class="sem">D</td>';//printar os dias da semana
	print '<td class="sem">S</td>';
	print '<td class="sem">T</td>';
	print '<td class="sem">Q</td>';
	print '<td class="sem">Q</td>';
	print '<td class="sem">S</td>';
	print '<td class="sem">S</td>';
	print '</tr><tr>';
	$dt = 1;
	if($branco > 0){
		for($x = 0; $x < $branco; $x++){
			print '<td>&nbsp;</td>';/*preenche os espaços em branco*/
			$dt++;
		}
	}

	for($i = 1; $i <= $n; $i++ ){


		if($i == $hoje && strcasecmp($mes,pegaMes(ltrim(date('m'),"0"))) == 0 && strcasecmp($ano,date('Y')) == 0){//imprime os dia corrente
			print '<td class="hj" name="hj" id="'.$i.'">';
			print '<a href="javascript:mudaFundo('.$i.')" >'.$i.'</a>' ;
			print '</td>';
			$dt++;

		}elseif($dt == 1){//imprime os domingos
			print '<td class="dom" name="dom" id="'.$i.'">';
			print '<a href="javascript:mudaFundo('.$i.')" >'.$i.'</a>' ;
			print '</td>';
			$dt++;
		}else{//imprime os dias normais
			print '<td class="td" name="td" id="'.$i.'">';
			print '<a href="javascript:mudaFundo('.$i.')" >'.$i.'</a>' ;
			print '</td>';
			$dt++;
		}
		if($dt > 7){//faz a quebra no sabado
			print '</tr><tr>';
			$dt = 1;
		} 
	}
	print '</tr>';
	print '</table>';

	?>

</body>
</html>
