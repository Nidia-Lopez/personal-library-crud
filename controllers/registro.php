<?php 


if(empty($_POST['inputNombre']) || empty($_POST['inputPaginas']) || empty($_POST['inputGenero']) || empty($_POST['inputPrecio'])){
    echo "Error, complete todo el formulario";
    exit();
}

include '../models/conexion.php';

$nombre = $_POST['inputNombre'];
$paginas = $_POST['inputPaginas'];
$genero = $_POST['inputGenero'];
$precio = $_POST['inputPrecio'];

echo $nombre,$paginas,$genero,$precio;

$consulta = $bd->prepare("INSERT INTO libros(nombre,paginas,genero,precio) VALUES(?,?,?,?)");
$resultado = $consulta->execute([$nombre,$paginas,$genero,$precio]);

if($resultado){
    header("Location: ../index.php");
}else{
    echo "Su registro ha fallado";
}