<?php

$nombre_bd = "personal-library";
$usuario = "root";
$contrasena = "";

try {

  $bd = new PDO(
    'mysql:host=localhost;
    dbname=' . $nombre_bd,
    $usuario,
    $contrasena
  );
} catch (Exception $e) {
  //manejo de exceptions (errores)
  echo "No funciono la conexión porque: " . $e->getMessage();
}