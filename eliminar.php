<?php 
    include_once('config/db.php');


    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "DELETE from productos WHERE id =$id";
        $resultado = mysqli_query($con,$sql);
        if (!$resultado) {
            die('No se pudo eliminar..');
        }else{
            header('Location: productos.php');
        }
    }

?>