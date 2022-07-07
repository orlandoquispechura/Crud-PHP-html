<?php
include_once('config/db.php');


if (isset($_POST['btnActu'])) {
    $id = $_GET['id'];
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];

    $sql = "UPDATE productos SET nombre='$nombre', precio=$precio, descripcion='$descripcion' WHERE id =$id";
    $result = mysqli_query($con, $sql);
    if (!$result) {
        die('No se pudo actualizar...');
    } else {
        header('Location: productos.php');
    }
}
