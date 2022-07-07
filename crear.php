<?php include_once('config/db.php');
include_once('compartidos/header.php')
?>


<h1 class="text-center mt-5">Crear producto</h1>
<div class="col-md-6 m-auto mt-5">
    <div class="card">
        <div class="card-body">
            <form action="store.php" method="post">
                <div class="form-group">
                    <input type="text" name="nombre" placeholder="ingrese el nombre.." class="form-control">
                </div>
                <div class="form-group">
                    <input type="number" name="precio" placeholder="ingrese el precio.." class="form-control mt-4 mb-4">
                </div>
                <div class="form-group">
                    <input type="text" name="descripcion" placeholder="ingrese la descripción.." class="form-control">
                </div>
                <div class="form-group  mt-5">
                    <input type="submit" value="Registrar" class="btn btn-success">
                    <a href="productos.php" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include_once('compartidos/footer.php') ?>