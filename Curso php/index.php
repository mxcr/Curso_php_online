<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Inicio Curso php(variables estaticas))</title>
</head>
<body>
<?php
function incrementaVariable(){
	static $contador=0;
	$contador++;
	echo $contador."<br>";
}
 incrementaVariable(); incrementaVariable(); incrementaVariable(); incrementaVariable();
?>

</body>
</html>