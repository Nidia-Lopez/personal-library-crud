<?php include 'templates/header.php' ?>
<?php
include 'models/conexion.php';

$sentencia = $bd->query("SELECT * from libros");   // aca decimos que recibiremos consultas SQL

$books = $sentencia->fetchAll(PDO::FETCH_OBJ);  // fecthcAll es un metodo de PDO dice que retorna un array de una sentencia simple
// print_r($books)
?>
<div class="container">
    <div class="row">
    <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Paginas</th>
                    <th scope="col">Genero</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($books as $book) { ?>

                <tr>
                    <th scope="row"><?php echo $book->id ?></th>
                    <td><?php echo $book->nombre ?></td>
                    <td><?php echo $book->paginas ?></td>
                    <td><?php echo $book->genero ?></td>
                    <td><?php echo $book->precio ?></td>
                    <td>
                        <a href="controllers\editar.php?id=<?php echo $book->id ?>" class="btn btn-primary ">Editar</a>
                        <a href="controllers\delete.php?id=<?php echo $book->id ?>"
                            class="btn btn-danger m1-2">Eliminar</a>
                    </td>
                </tr>

                <?php } ?>

            </tbody>
        </table>
    </div>
</div>

<div class="container">
  <div class="card">
    <div class="card-header">Ingrese un nuevo libro</div>
    <form action="controllers/registro.php" method="POST">
      <div class="mb-2 ml-2 mr-2">
        <label>Nombre</label>
        <input class="form-control" type="text" placeholder="Ingrese el nombre" name="inputNombre"
          aria-label="default input example" required>
      </div>
      <div class="mb-2 ml-2 mr-2">
        <label>Paginas</label>
        <input class="form-control" type="number" placeholder="Ingrese cuantas paginas" name="inputPaginas"
          aria-label="default input example" required>
      </div>
      <div class="mb-2 ml-2 mr-2">
        <label>Genero</label>
        <input class="form-control" type="text" placeholder="Ingrese un genero" name="inputGenero"
          aria-label="default input example" required>
      </div>
      <div class="mb-2 ml-2 mr-2">
        <label>Precio</label>
        <input class="form-control" type="number" placeholder="Ingrese el precio" name="inputPrecio"
          aria-label="default input example" required>
      </div>
      <input type="submit" class="btn btn-primary mb-2 ml-2" value="Registrar">

    </form>
  </div> 
<br /><br />
</div>

<?php include 'templates/footer.php' ?>