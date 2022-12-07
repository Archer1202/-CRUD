<?php

include "modelo/conexion.php";

$id = $_GET["id"];

$sql = $conexion->query(" select * from producto where id_producto=$id ");

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document </title>
            <!-- CSS only -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
        <form class="col-4 p-4 m-auto" method="POST">
                <h5 class="text-center text-secondary"> Modificar material </h5>
                <input type="hidden" name="id" value="<?= $_GET["id"]?>">
                <?php

                ?>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" >
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Unidad de Medida</label>
                    <input type="text" class="form-control" name="unidad" >
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Precio</label>
                    <input type="number" class="form-control" name="precio" >
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Stock</label>
                    <input type="nuber" class="form-control" name="stock" >
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Total por producto</label>
                    <input type="number" class="form-control" name="total" >
                </div>
                  

                <button type="submit" class="btn btn-primary" name="botregistro" value= "OK">Modificar material</button>
            </form>
    </body>
</html>