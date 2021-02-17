<?php

//creando la conexion    
    $con = mysqli_connect('localhost','root','','formulario1.php') or die ('Error en la conexion servidor');
   

$sql= "INSERT INTO formulariounico VALUES (Cedula,'".$_POST["Nombre"]."','".$_POST["Apellido"]."','".$_POST["Email"]."','".$_POST["Telefono"]."')";

    $resultado=mysqli_query($con,$sql) or die ('error en query database');

    mysqli_close($con);

    echo 'La Cedula es: '.$_POST["Cedula"];
    echo 'El Nombre es: '.$_POST["Nombre"];
    echo 'El Apellido es: '.$_POST["Apellido"];
    echo 'El Email es: '.$_POST["Email"];
    echo 'El Telefono es: '.$_POST["Telefono"];



?>
