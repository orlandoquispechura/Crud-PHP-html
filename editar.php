<?php include_once('config/db.php');
include_once('compartidos/header.php')
?>
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM productos WHERE id=$id";
    $resultado = mysqli_query($con, $sql);
    if (mysqli_num_rows($resultado)==1) {
        $item = mysqli_fetch_array($resultado);
        $nombre = $item['nombre'];
        $precio = $item['precio'];
        $descripcion = $item['descripcion'];
    }
}
?>

<h1 class="text-center mt-5">Editar producto</h1>
<div class="col-md-6 m-auto mt-5">
    <div class="card">
        <div class="card-body">
            <form action="update.php?id=<?php echo $_GET['id'] ?>" method="post">
                <div class="form-group">
                    <input type="text" name="nombre" placeholder="ingrese el nombre.." value="<?php echo $nombre; ?>" class="form-control">
                </div>
                <div class="form-group">
                    <input type="number" name="precio" placeholder="ingrese el precio.." value="<?php echo $precio; ?>"  class="form-control mt-4 mb-4">
                </div>
                <div class="form-group">
                    <input type="text" name="descripcion" placeholder="ingrese la descripción.." value="<?php echo $descripcion; ?>" class="form-control">
                </div>
                <div class="form-group">
                    <!-- <input type="submit" class="btn btn-success mt-5" value="Actualizar"> -->
                   <button name="btnActu" class="btn btn-success mt-5" >Actualizar</button>
                   <a href="productos.php" class="btn btn-secondary mt-5">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include_once('compartidos/footer.php') ?>