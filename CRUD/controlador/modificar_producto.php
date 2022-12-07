<?php

include "modelo/conexion.php";
?>
<?

if(!empty($_POST["botregistro"])){
    if(!empty($_POST["nombre"]) and !empty($_POST["unidad"]) and !empty($_POST["precio"]) and !empty($_POST["stock"]) and !empty($_POST["total"])) {
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $unidad = $_POST["unidad"];
        $precio = $_POST["precio"];
        $stock = $_POST["stock"];
        $total = $_POST["total"];
        $sql = $conexion->query("update crud_php set nombre= '$nombre', unidad ='$unidad', precio = $precio, stock = $stock, total = $total where id_producto=$id" );
        if ($sql==1) {
            header('location: index.php');
        } else {
            echo "<div class= 'alert alert-danger'> Error al modificar producto </div>";
        };
        
    } else {
        echo "<div class= 'alert alert-warning'> Faltan datos</div>";
    };
};
?>
