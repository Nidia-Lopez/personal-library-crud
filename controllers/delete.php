<?php

include '../models/conexion.php';

$codigoLibro = $_GET['id'];

$consulta = $bd->prepare("DELETE FROM libros WHERE id = ?");

$respuesta = $consulta->execute([$codigoLibro]);

if ($respuesta) {
    header("Location: ../index.php");
} else {
    echo "Su eliminacion ha fallado";
}




