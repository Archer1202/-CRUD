<?php

if (!empty($_GET["id"])) {
    $id = $_GET["id"];
    $sql = $conexion->query("delete from crud where id_producto=$id ");
    if ($sql==1) {
        echo '<div class="alert alert-success">Material eliminado exitosamente</div>';
    } else {
        echo '<div class="alert alert-danger">Error al eliminar</div>';
    }
    
}

?>