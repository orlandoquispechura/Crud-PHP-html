<?php 
    include_once('config/db.php');


    if (isset($_POST)) {
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];

        $sql = "INSERT INTO productos (nombre, precio, descripcion) VALUES('$nombre', $precio, '$descripcion')";
        $resultado = mysqli_query($con, $sql);
        if (!$resultado) {
            die('No se pudo registrar...');
        }else{
            header('Location: productos.php');
        }
    }

?>