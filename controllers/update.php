<?php
print_r($_POST);

include '../models/conexion.php';

$codigoLibro = $_POST['id'];

$nombre = $_POST['inputNombre'];
$porciones = $_POST['inputPaginas'];
$genero = $_POST['inputGenero'];
$precio = $_POST['inputPrecio'];

print_r($codigoLibro);
$consulta = $bd->prepare("UPDATE Libros SET Nombre = ?, Paginas = ?, Genero = ?, Precio = ? WHERE id = ?");

$respuesta = $consulta->execute([$nombre,$porciones,$genero,$precio,$codigoLibro]);

if ($respuesta) {
    header("Location: ../index.php");
} else {
    echo "Su edicion ha fallado";
}