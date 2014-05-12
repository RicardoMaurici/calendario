<?php
//date_default_timezone_set(‘UTC’);
echo date('H:i');
echo '<br/>';

echo '<br/>';
echo date('jS F Y');
echo '<br/>';
echo date('U');
echo '<br/>';
$dia = 01;
$mes = 01;
$ano = 2000;

$dniver = mktime('0','0','0',$mes,$dia,$ano);

$agoraunix = time();
$idadeunix = $agoraunix - $dniver;
$idade = floor($idadeunix/(365*24*60*60));
echo "Idade é $idade";
echo '<br/>';
$dataemunix = date("U");
echo date("h:i:s - d/m/Y", $dataemunix);

?>			