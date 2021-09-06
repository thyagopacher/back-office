<?php 
$conecta = mysql_connect('localhost', 'root', '') or print (mysql_error()); 
mysql_select_db("backoffice", $conecta) or print(mysql_error()); 
print "Conexão e Seleção OK!"; 
mysql_close($conecta); 
?>


<html>

<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
	sadsadasdasd
</body>
</html>