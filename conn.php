<?php
	$conn = mysqli_connect('localhost', 'root', '', 'exportar_excel');
	
	if(!$conn){
		die("Error: Fallo al conectar con la base de datos");
	}
?>