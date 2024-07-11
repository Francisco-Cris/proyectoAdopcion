<?php
$mysqli = new mysqli("localhost", "root", "", "adopcion_animales");

if ($mysqli->connect_error) {
    die("Error en la conexión: " . $mysqli->connect_error);
} else {
    echo "Conexión Exitosa";
}


$Ced =$_POST["cedula_adoptante"];
$Nomb =$_POST["nombre_adoptante"];
$Ape =$_POST["apellido_adoptante"];
$Telef =$_POST["telefono_adoptante"];
$CorreoElec =$_POST["correo_adoptante"];
$Edad =$_POST["fecha"];
$Cod_Est =$_POST["cod_estado"];

$Reg ="call Sp_RegistrarAdoptante('$Ced','$Nomb','$Ape','$Telef','$CorreoElec','$Edad','$Cod_Est')";

$query = mysqli_query($mysqli,$Reg);

if($query>=1)
{
		$mensaje="los datos ingresaron correctamente....a";
	echo "<script> alert('$mensaje');</script>";
	unset($_GET['mensaje']);
	}
	else
	{
	$mensaje="Error no se Ingreso los datos";
	echo "<script> alert('$mensaje');</script>";
	unset($_GET['mensaje']);
	}
?>