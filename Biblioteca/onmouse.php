<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script language="JavaScript" type="text/javascript">
function mudaCor(cor)
{
document.getElementById('conteudo').style.background = cor;
}
</script>
<style type="text/css">
<!--
#conteudo {
background-color: #999999;
font-family: Arial, Helvetica, sans-serif;
font-size: 16px;
font-weight: bold;
color: #000000;
}
-->
</style>
</head>
<body>
<div id="conteudo">Content for id "conteudo" Goes Here</div>
<a href='javascript:mudaCor("#FF0000")'>vermelho</a>
<a href='javascript:mudaCor("#FFFF00")'>amarelo</a>
<a href='javascript:mudaCor("#0000FF")'>azul</a>
<a href='javascript:mudaCor("#009900")'>verde</a>
<a href='javascript:mudaCor("#FF00FF")'>rosa</a>
</body>
</html>