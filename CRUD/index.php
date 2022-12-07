<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Crud con PHP </title>
            <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/3aa7accef8.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <script>
            function eliminar(){
                const respuesta=confirm("Deseas eliminar?");
                return respuesta
            }
        </script>

        <h1 class="text-center p-"> CRUD de material </h1>
        <?php
        include "modelo/conexion.php";
        include("controlador/eliminar.php");
        ?>
        <div class="container-fluid row">
            <form class="col-4 p-4" method="POST">
                <h3 class="text-center text-secondary"> Registro de material </h3>
                <?php
                include "controlador/registro_material.php";
                ?>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Unidad de Medida</label>
                    <input type="text" class="form-control" name="unidad">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Precio</label>
                    <input type="number" class="form-control" name="precio">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Stock</label>
                    <input type="nuber" class="form-control" name="stock">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Total por producto</label>
                    <input type="number" class="form-control" name="total">
                </div>
                <button type="submit" class="btn btn-primary" name="botregistro" value= "OK">Registrar</button>
            </form>
            <div class="col-8 p-4">
                <table class="table">
                    <thead class="bg-info">
                        <tr>
                        <th scope="col">id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Unidad de Medida </th>
                        <th scope="col">Precio</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Total por producto</th>
                        <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?PHP
                        include "modelo/conexion.php";
                        $sql = $conexion->query("select * from crud");
                        while($datos=$sql->fetch_object()){ ?>
                        <tr>
                            <td><?= $datos->id_producto ?></td>
                            <td><?= $datos->Nombre ?></td>
                            <td><?= $datos->Unidad_de_Medida ?></td>
                            <td><?= $datos->Precio ?></td>
                            <td><?= $datos->Stock ?></td>
                            <td><?= $datos->Total_por_producto ?></td>
                        <td>
                            <a href="modificar_producto.php?id=<?=$datos->id_producto?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a onclick="return eliminar()" href="index.php?id=<?=$datos->id_producto?>" class="btn btn-small btn-danger"><i class="fa-solid fa-delete-left"></i></a>
                        </td>
                        </tr>
                        <?PHP }
                        ?>
                        
                    </tbody>
                </table>
            </div>
        </div>

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>