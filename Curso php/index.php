<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Inicio Curso php(Ambito de las variables))</title>
</head>
<body>
<?php
$nombre="Juan";

function dameNombre(){
	global $nombre;
	$nombre="El nombre es: ". $nombre;

}
dameNombre();
echo $nombre;
?>

</body>
</html>