<?php

 include ("conexion.php");

 //declaro variables
 $Cedula   = $_POST["Cedula"];
 $Nombre   = $_POST["Nombre"];
 $Apellido = $_POST["Apellido"];
 $Email    = $_POST["Email"];
 $Telefono = $_POST["Telefono"];


 $sql= "INSERT INTO formulario1.php ('Cedula', 'Nombre', 'Apellido', 'Email', 'Telefono') VALUES ('$Cedula','$Nombre','$Apellido','$Email','$Telefono')";
 //ejecutamos y verificamos si guardan los datos

 if (mysqli_query($conexion, $sql)

  {

	echo "datos guardados";
	
 }

 else {
	echo "error" .$sql. "<br>" .mysqli_error($conexion);
 }

 //cerrar conexion
 mysqli_close($conexion);


?>





