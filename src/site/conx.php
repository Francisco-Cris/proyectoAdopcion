<?php
$mysqli = new mysqli("localhost", "root", "", "adopcion_animales");

if ($mysqli->connect_error) {
    die("Error en la conexión: " . $mysqli->connect_error);
} else {
    echo "Conexión Exitosa";
}
?>