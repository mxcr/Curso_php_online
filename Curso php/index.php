<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Inicio Curso php(STRINGS))</title>
	<style>
		.resaltar{
			color: #F00;4
			font-weight: bold;
		}
	</style>
</head>
<body>
<?php

echo "<p class='resaltar'>Esto es un ejemplo de frase</p>";

echo "<p class=\"resaltar\">Esto es un ejemplo de frase</p>";

$variable1="casa";
$variable2="CASA";

$resultado=strcasecmp($variable1, $variable2);

if($resultado){
	echo "Coinciden";
}else{
	echo "No coinciden";
}

?>

</body>
</html>