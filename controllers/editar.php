<?php include '../templates/header.php' ?>
<?php
include '../models/conexion.php';

$codigo = $_GET['id'];
$consulta= $bd->prepare("SELECT * FROM libros WHERE id = ?");
$consulta->execute([$codigo]);

$libro = $consulta->fetch(PDO::FETCH_OBJ);

// print_r($libro);
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="card mb-4">
            <div class="card-header"> Editar datos del libro</div>
            <form action="update.php" method="POST">
                <div class="form-group">

                <div class="mb-2 ml-2 mr-2">
                    <label>Nombre</label>
                    <input class="form-control" type="text" placeholder="Nombre del libro" name="inputNombre" value="<?php echo $libro->nombre ?>" required>
                </div>

                <div class="mb-2 ml-2 mr-2">
                    <label>Paginas</label>
                    <input class="form-control" type="number" placeholder="Ingrese la cantidad de paginas" name="inputPaginas" value="<?php echo $libro->paginas ?>" required>
                </div>

                <div class="mb-2 ml-2 mr-2">
                    <label>Genero</label>
                    <input class="form-control" type="text" placeholder="Ingrese un genero" name="inputGenero" value="<?php echo $libro->genero ?>" required>
                </div>

                <div class="mb-2 ml-2 mr-2">
                    <label>Precio</label>
                    <input class="form-control" placeholder="Ingrese el precio" name="inputPrecio" value="<?php echo $libro->precio ?>" required> 
                </div>

                <input type="hidden" name="id" value="<?php echo $libro->id ?>">
                <input type="submit" class="btn btn-primary mb-2 ml-2" value="Actualizar">
            </form>
        </div>
    </div>
        <br>
        <br>
        <br>
</div>

                


                
                        





<?php include '../templates/footer.php' ?>