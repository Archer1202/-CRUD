<?php

if(!empty($_POST["botregistro"])){
    if(!empty($_POST["nombre"]) and !empty($_POST["unidad"]) and !empty($_POST["precio"]) and !empty($_POST["stock"]) and !empty($_POST["total"])) {

        $nombre = $_POST["nombre"];
        $unidad = $_POST["unidad"];
        $precio = $_POST["precio"];
        $stock = $_POST["stock"];
        $total = $_POST["total"];

        $sql = $conexion->query(
            "insert into crud(Nombre, Unidad_de_Medida, Precio, Stock, Total_por_producto)values('$nombre', '$unidad', '$precio', '$stock', '$total') "
        );
        if ( $sql== 1) {
            echo "<div class='alert alert-success'> Material registrado correctamente </div>";
        } else {
            echo "<div class='alert alert-danger'> Error al registrar material</div>";
        }
        
    } else {
        echo "<div class='alert alert-danger'> Falta algun campo </div>";
    }
}

?>