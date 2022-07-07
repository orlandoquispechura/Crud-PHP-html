<?php include_once('config/db.php');
include_once('compartidos/header.php')
?>

<h1 class="text-center mt-3">Listado de Productos</h1>

<a href="crear.php" class="btn btn-primary mt-3 mb-3">Nuevo producto</a>
<a href="index.php" class="btn btn-secondary" > Ir a página principal </a>

<div class="card">
    <div class="card-body">
        <table class="table mt-3 table-striped">
            <thead class="bg-dark text-white">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM productos";
                $productos = mysqli_query($con, $sql);
                foreach ($productos as $producto) : ?>
                    <tr>
                        <td><?php echo $producto['id'] ?></td>
                        <td><?php echo $producto['nombre'] ?></td>
                        <td><?php echo $producto['precio'] ?></td>
                        <td><?php echo $producto['descripcion'] ?></td>
                        <td>
                        <a href="editar.php?id=<?php echo $producto['id'] ?>" class="btn btn-info">Editar</a>
                        <a href="eliminar.php?id=<?php echo $producto['id'] ?>" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>

                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>










<?php include_once('compartidos/footer.php') ?>