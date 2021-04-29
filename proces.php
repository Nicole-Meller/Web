<?php
	//conexion con la base de datos y el servidor
	$link = mysql_connect("localhost","root","root") or die("<h2>No se encuentra el servidor</h2>");
	$db = mysql_select_db("SILVA",$link) or die("<h2>Error de Conexion</h2>");

	//obtenemos los valores del tabla
	$nombre = $_POST['nombre'];
	$apellidop = $_POST['apellidop'];
	$apellidom = $_POST['apellidom'];
	
	

	//Obtiene la longitus de un string
	$req = (strlen($nombre)*strlen($apellidop)*strlen($apellidom)) or die("No se han llenado todos los campos");

	
	//ingresamos la informacion a la base de datos
	mysql_query("INSERT INTO datos VALUES('$nombre','$apellidop','$apellidom')",$link) or die("<h2>Error Guardando los datos</h2>");
	
	echo $nombre. "<b> es su nombre. </b> <br>";
	echo $apellidop. "<b> es su apellido paterno. </b> <br>";
	echo $apellidom. "<b> es su apellido materno. </b> <br>";
?>